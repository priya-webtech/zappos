<?php

namespace App\Http\Livewire\OnlineStore;

use Livewire\Component;
use App\Models\page;

class PagesDetail extends Component
{
    public $page,$content;
    public function mount($id) {
        
        $this->uuid = $id;
        //$this->editQuantitiesDetailsModal = false;
        $this->page = page::where('uuid',$this->uuid)->first();
       
    }

    public function render()
    {
        return view('livewire.online-store.pages-detail');

        if($this->page['visibility'] == 'yes') {

            $this->page['visibility'] = true;

        } else {

            $this->page['visibility'] = false;

        }
    }

     protected $rules = [

        'page.title' => 'required',
        'page.content' => 'required',
        'page.seo_title' => 'required',
        'page.seo_description' => 'required',
        'page.seo_url' => 'required',

    ];

    public function Updatepages()
    {
        dd('ehell');
        if ($this->page['visibility'] == 'no') {

            $visibility = 'yes';

        } 

        else {

            $visibility = 'no';

        }

        page::where('id', $this->page['id'])->update(

                [

                    'title'            => $this->page['title'],

                    'content'          => $this->page['content'],

                    'seo_title'        => $this->page['seo_title'],

                    'seo_description'  => $this->page['seo_description'],

                    'seo_url'          => $this->page['seo_url'],
                    
                    'visibility'       => $visibility,

                ]

        );

        $this->page = page::where('id',$this->page['id'])->first();

         session()->flash('message', 'Record Updated Successfully.');
    }

}
