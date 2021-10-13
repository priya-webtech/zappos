<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\tagsale;
use Livewire\WithFileUploads;

class TagsaleDetail extends Component
{
	use WithFileUploads;
	public $tagsale,$image;

	 protected $rules = [
        'tagsale.title' => 'required',
        'image' => 'required',

    ];
	public function mount($id) {

        $this->tagsale = tagsale::where('id',$id)->first();

    }
    public function render()
    {
        return view('livewire.setting.tagsale-detail');
    }

    public function updateDetail(){

    	if ($this->image) {
    		$photo = $this->image;
    		$path_url = $photo->storePublicly('tagsale','public');
    		tagsale::where('id', $this->tagsale['id'])->update(

                [
                    'icon'     => $path_url, 
                ]

            );
    	}

       tagsale::where('id', $this->tagsale['id'])->update(['title' => $this->tagsale['title']]);

    }
}
