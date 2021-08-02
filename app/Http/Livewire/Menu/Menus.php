<?php

namespace App\Http\Livewire\Menu;

use Harimayco\Menu\Models\MenuItems;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Menus extends Component
{
    public function render()
    {
        return view('livewire.menu.menus');
    }

    public function addCustomMenu()
    {
        $menuitem = new MenuItems();

        if (!empty($_FILES['file'])) {
            $filename = $_FILES['file']['name'];
            Storage::putFileAs('public/uploads/', $_FILES['file']['tmp_name'], $filename);
            $menuitem->image = $filename;
        }
        $menuitem->label = request()->input("labelmenu");
        $menuitem->link = request()->input("linkmenu");
        if (config('menu.use_roles')) {
            $menuitem->role_id = request()->input("rolemenu") ? request()->input("rolemenu") : 0;
        }
        $menuitem->menu = request()->input("idmenu");
        $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        $menuitem->save();

    }
}
