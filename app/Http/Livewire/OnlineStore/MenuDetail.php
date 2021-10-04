<?php

namespace App\Http\Livewire\OnlineStore;

use App\Models\Menu;
use App\Models\page;
use App\Models\Product;
use Harimayco\Menu\Models\MenuItems;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Http\Request;

class MenuDetail extends Component
{
    public $Menumain,$pages,$Product,$MenuItems;

    public function render()
    {
        $this->Menumain = Menu::All();
        $this->pages = page::with('admin_menu_items')->get();
        $this->Product = Product::All();
        $this->MenuItems = MenuItems::All();

        return view('livewire.online-store.menu-detail');
    }

    public function addCustomMenu() {
        $menuitem = new MenuItems();

        if(!empty($_FILES['file'])) {
            $filename = $_FILES['file']['name'];
            Storage::putFileAs('public/uploads/',$_FILES['file']['tmp_name'],$filename);
            $menuitem->image = $filename;
        }



        $menuitem->label = request()->input("labelmenu");
        $menuitem->link = request()->input("linkmenu");
        if (config('menu.use_roles')) {
            $menuitem->role_id = request()->input("rolemenu") ? request()->input("rolemenu")  : 0 ;
        }
        $menuitem->menu = request()->input("idmenu");
        $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        $menuitem->save();

    }

    public function addMainmenu(Request $request) {
        
       $menuidd = $request->menuid;
       $pageid = $request->pageid;
       
        foreach ($pageid as $key => $id) {;
         $this->pages = page::where('id',$id)->first();
         $pageslink =  url('/').'/'.$this->pages['seo_url'];
         $menuname = new MenuItems();
         $menuname->label = $this->pages['title'];;
         $menuname->link = $pageslink;
         $menuname->menu = $menuidd;
         $menuname->save();
        }
    }

    public function addProductmenu(Request $request) {
        
       $menuidd = $request->menuid;
       $productid = $request->product_id;
       
        foreach ($productid as $key => $id) {

         $this->Product = Product::where('id',$id)->first();
         $productlink =  url('/').'/'.$this->Product['seo_utl'];
         $menuname = new MenuItems();
         $menuname->label = $this->Product['title'];
         $menuname->link = $productlink;
         $menuname->menu = $menuidd;
         $menuname->save();
        }
    }
}
