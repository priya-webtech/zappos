<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', Livewire\Dashboard::class);
Route::get('/signin', function (){
    return view('livewire.admin.login');
})->name('admin.login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', Livewire\Dashboard::class);

    Route::middleware(['guest'])->group(function () {

        Route::get('/admin', Livewire\Admin\Dashboard::class);
        //users
        Route::get('/admin/users', Livewire\User\Users::class)->name('users');
        //customer
        Route::get('/admin/customers', Livewire\Customer\ListCustomers::class)->name('customers');
        Route::get('/admin/customers/new', Livewire\Customer\Create::class)->name('customer.create');
        Route::post('/admin/customers/store', [Livewire\Customer\Create::class, 'storeCustomer'])->name('customer.store');
        Route::get('/admin/customers/{id?}', Livewire\Customer\Details::class)->name('customer.detail');

        //menu
        Route::get('/admin/menu-list', Livewire\Menu\MenuList::class)->name('menu-list');
        Route::get('/admin/menu', Livewire\Menu\Menus::class)->name('menu');
        Route::get('/admin/menu?menu={id}', Livewire\Menu\Menus::class)->name('menu-item');
        Route::post('addCustomMenu','App\Http\Livewire\Menu\Menus@addCustomMenu')->name('addCustomMenu');

        //settings
        Route::get('/admin/settings', Livewire\Admin\Settings::class)->name('settings');

        //customer import
        Route::post('import', [Livewire\Customer\ListCustomers::class, 'importCustomers'])->name('import');


    });

});

