<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\file;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Files extends Component
{

 use WithFileUploads;
 public $getfile, $uploadfile = [];

 	public function mount()
 	{
 		$this->getfile = file::get();
 	}
    public function render()
    {

    	if($this->uploadfile)
        {
            foreach ($this->uploadfile as $photo) {
                
                // $file_extension = $photo->extension();
                $filename = $photo->getClientOriginalName();
        		$photo->storeAs('public/files/',$filename);
            
                $productinsert = file::create([
                    'image' => $filename,
                ]);
            }
             $this->getfile = file::get();
        }
        return view('livewire.setting.files');
    }
}
