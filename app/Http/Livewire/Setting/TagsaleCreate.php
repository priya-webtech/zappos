<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\tagsale;

class TagsaleCreate extends Component
{
    public function render()
    {
        return view('livewire.setting.tagsale-create');
    }

    public function storeTagsale(Request $req)
    {

    	if ($req['image']) {
    		$photo = $req['image'];
    		$path_url = $photo->storePublicly('tagsale','public');
    	}else{

    		$path_url = 'null';
    	}
    	$product_detail_arr = [

                'title' => $req['title'],

                'icon' => $path_url,

            ];
        tagsale::create($product_detail_arr);

        return redirect(route('Channels'));
    }
}
