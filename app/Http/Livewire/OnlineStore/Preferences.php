<?php

namespace App\Http\Livewire\OnlineStore;

use App\Models\preference;
use Livewire\Component;
use Livewire\WithFileUploads;

class Preferences extends Component
{
	use WithFileUploads;

	public $getpreference,$social_img;

	protected $rules = [

        'getpreference.meta_title' => [],

        'getpreference.meta_description' => [],

    ];

	public function mount()
	{
		$this->getpreference = preference::where('id',1)->first();
	}
    public function render()
    {
        return view('livewire.online-store.preferences');
    }
    public function update($id)
	{
		$this->getpreference = preference::where('id',$id)->update(
			[

                'meta_title'    => $this->getpreference['meta_title'],

                'meta_description'     => $this->getpreference['meta_description'],

            ]
		);
		if($this->social_img){

			$photo = $this->social_img;
			$path_url = $photo->storePublicly('preference','public');
            
            $productinsert = preference::where('id',$id)->update(['social_img' => $path_url]);
        }

		session()->flash('message', 'Preference Updated Successfully.');

	}
}
