<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class CustomersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{

    public $export, $perPage, $page, $customerids;

    public function __construct($export, $perPage, $page, $customerids)
    {
        $this->export = $export;
        $this->page  = $page;
        $this->perPage  = $perPage;
        $this->customerids  = $customerids;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         $users =  DB::table('users')
            ->join('model_has_roles as roles', 'users.id', '=', 'roles.model_id')
            ->join('customer_detail as detail', 'users.id', '=', 'detail.user_id')
            ->join('customer_address as address', 'users.id', '=', 'address.user_id')
            ->where('address.address_type', '=','shipping_address')
            ->where('roles.role_id', '=','2')
            ->orderBy('users.updated_at', 'desc')
            ->select(DB::raw('users.first_name, users.last_name, users.email,
                address.company , address.address, address.apartment,address.city,address.country, address.postal_code,users.mobile_number,
               detail.agreed_to_receive_marketing_mails, detail.tags,detail.note,detail.collect_tax'));

        if($this->export == 'Current Page') {
            $offset = max(0, ($this->page - 1) * $this->perPage);
            $items = $users->get()->slice($offset, $this->perPage + 1);
            return new Paginator($items, $this->perPage, $this->page);
        } elseif ($this->export == 'All Customers') {
            return $users->get();
        }  elseif ($this->export == 'All Customers') {
            return $users->get();
        } elseif ($this->export == 'Searched Customers') {
            return $users->whereIn('users.id', $this->customerids)->get();
        } else {
            $ids = explode(',',$this->export);
            return $users->whereIn('users.id', $ids)->get();
        }

    }
    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Company',
            'Address1',
            'Address2',
            'City',
            'Country',
            'Zip',
            'Phone',
            'Accept Marketing',
            'Tags',
            'Note',
            'Tax Exempt'
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}
