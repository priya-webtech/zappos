<?php

namespace App\Http\Livewire\OnlineStore;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\page;

class PagesCreate extends Component
{

    public function render()
    {
        return view('livewire.online-store.pages-create');
    }

    public function storePages(Request $request)
    {

        $pages_arr = [

            'title' => $request['title'],

            'content' => $request['content'],

            'seo_title' => $request['seo_title'],

            'seo_description' => $request['seo_description'],

            'seo_url' => $request['seo_url'],

            'visibility' => $request['visibility']

        ];

        page::create($pages_arr);

        session()->flash('message', 'Record Saved!!');

        return redirect(route('pages-list'));
    }
}
