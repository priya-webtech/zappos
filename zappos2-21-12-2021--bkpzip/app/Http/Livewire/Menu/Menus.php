<?php

namespace App\Http\Livewire\Menu;

use App\Models\Menu;
use App\Models\page;
use App\Models\Product;
use App\Models\Collection;
use Harimayco\Menu\Models\MenuItems;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Http\Request;

class Menus extends Component
{
    public $Menumain,$pages,$Product,$MenuItems,$pageslimit,$productlimit,$Collection,$Collectionlimit;

    public function render()
    {
        $this->Menumain = Menu::All();
        $this->pages = page::with('admin_menu_items')->get();
        $this->pageslimit = page::orderBy('id','DESC')->limit(10)->get();
        $this->Product = Product::All();
        $this->productlimit = Product::orderBy('id','DESC')->limit(10)->get();
        $this->Collection = Collection::All();
        $this->Collectionlimit = Collection::orderBy('id','DESC')->limit(10)->get();
        $this->MenuItems = MenuItems::All();

        return view('livewire.menu.menus');
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
        $menuitem->multipleid = '0';
        if (config('menu.use_roles')) {
            $menuitem->role_id = request()->input("rolemenu") ? request()->input("rolemenu")  : 0 ;
        }
        $menuitem->menu = request()->input("idmenu");
        $menuitem->type_category = '0';
        $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        $menuitem->save();

    }

    public function addMainmenu(Request $request) {
        
       $menuidd = $request->menuid;
       $pageid = $request->pageid;
       
        foreach ($pageid as $key => $id) {;
         $this->pages = page::where('id',$id)->first();
         $checkmenu = MenuItems::where('label',$this->pages)->get();
         if($this->pages){
         $pageslink =  $this->pages['seo_url'];
         $menuname = new MenuItems();
         $menuname->label = $this->pages['title'];
         $menuname->multipleid = '0';
         $menuname->type_category = '1';
         $menuname->link = $pageslink;
         $menuname->menu = $menuidd;
         $menuname->save();
         }
         else{
            session()->flash('message', 'Already Added.');
         }
        }
    }

    public function addProductmenu(Request $request) {
        
       $menuidd = $request->menuid;
       $productid = $request->product_id;
       
        foreach ($productid as $key => $id) {
         $this->Product = Product::where('id',$id)->first();
         $checkmenu = MenuItems::where('label',$this->Product)->get();
         if($this->Product){
         $productlink = $this->Product['seo_utl'];
         $menuname = new MenuItems();
         $menuname->label = $this->Product['title'];
         $menuname->multipleid = $this->Product['id'];
         $menuname->type_category = '2';
         $menuname->link = $productlink;
         $menuname->menu = $menuidd;
         $menuname->save();
         }
         else{

            session()->flash('message', 'Already Added.');
         }
        }
    }

    public function addCollectionmenu(Request $request) {
        
       $menuidd = $request->menuid;
       $collectionid = $request->collection_id;
      
        foreach ($collectionid as $key => $id) {
         $this->Collection = Collection::where('id',$id)->first();

         $checkmenu = MenuItems::get();
         foreach ($checkmenu as $key => $menu) {
            if($menu['label'] === $this->Collection['title'])
            {
                 session()->flash('message', 'Already Added.'); 
            }
            else{
            $collection_name =  $this->Collection['title'];
            $collection_id =  $this->Collection['id'];
            }
         }
         if($collection_name){
         $collectionlink =  $this->Collection['seo_url'];
         $menuname = new MenuItems();
         $menuname->label = $collection_name;
         $menuname->multipleid = $collection_id;
         $menuname->type_category = '3';
         $menuname->link = $collectionlink;
         $menuname->menu = $menuidd;
         $menuname->save();
        }
        
        

        }
    }
}
