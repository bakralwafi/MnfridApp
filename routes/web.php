<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingwebController;
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

Route::get('/',[StaticController::class,'index'])->name('home.index');
Route::get('/about',[StaticController::class,'about'])->name('home.about');
Route::get('/contact',[StaticController::class,'contact'])->name('home.contact');
Route::get('/services',[StaticController::class,'services'])->name('home.services');
Route::get('/portfolio/{var}',[StaticController::class,'portfolio'])->name('home.portfolio');

Route::get('/index_ar',[StaticController::class,'indexar'])->name('ar.index_ar');
Route::get('/about_ar',[StaticController::class,'aboutar'])->name('ar.about_ar');
Route::get('/contact_ar',[StaticController::class,'contactar'])->name('ar.contact_ar');
Route::get('/services_ar',[StaticController::class,'servicesar'])->name('ar.services_ar');


Route::get('insert',[App\Http\Controllers\SettingwebController::class ,'insertform']);
Route::post('add',[App\Http\Controllers\SettingwebController::class,'update']);
Route::get('viewsetfooter',[App\Http\Controllers\SettingwebController::class,'showsettingsweb']);

Route::get('add_service',[App\Http\Controllers\ServicesController::class ,'insertform']);
Route::post('create_service',[App\Http\Controllers\ServicesController::class,'insert']);
Route::get('viewservices',[App\Http\Controllers\ServicesController::class,'showservices']);

Route::get('add_workwith',[App\Http\Controllers\WorkwithController::class ,'insertform']);
Route::post('create_workwith',[App\Http\Controllers\WorkwithController::class,'insert']);
Route::get('viewworkwith',[App\Http\Controllers\WorkwithController::class,'showworkwith']);

Route::get('add_protfolio',[App\Http\Controllers\PortfoltoController::class ,'insertform']);
Route::post('create_protfolio',[App\Http\Controllers\PortfoltoController::class,'insert']);
Route::get('viewprotfolio',[App\Http\Controllers\PortfoltoController::class,'showprotfolios']);

Route::get('add_items',[App\Http\Controllers\ItemsController::class ,'insertform']);
Route::post('create_items',[App\Http\Controllers\ItemsController::class,'insert']);
//Route::get('viewitems',[App\Http\Controllers\ItemsController::class,'showprotfolios']);
Route::get('add_subpor',[App\Http\Controllers\SubporController::class ,'insertform']);
Route::post('create_subpor',[App\Http\Controllers\SubporController::class,'insert']);

Route::get('update_indexpage',[App\Http\Controllers\IndexpageController::class ,'insertform']);
Route::post('updateindexpage',[App\Http\Controllers\IndexpageController::class,'update']);
Route::get('viewindexpage',[App\Http\Controllers\IndexpageController::class,'showsettingindexpage']);



/*-------------------------------*/
Route::group(['prefix'=>'Dashboard','middleware'=>'auth'],function () {
    Route::get('/',[DashboardController::class,'index'])->name('Dashboard.index');
    Route::get('/addservices',[DashboardController::class,'addser'])->name('Dashboard.addservices');
    Route::get('/addworkwith',[DashboardController::class,'addwork'])->name('Dashboard.addworkwith');
    Route::get('/addprotfolio',[DashboardController::class,'addprotflio'])->name('Dashboard.addprotfolio');
    Route::get('/additems',[DashboardController::class,'additems'])->name('Dashboard.additems');
    Route::get('/addsubpor',[DashboardController::class,'addsubpor'])->name('Dashboard.addsubpor');
    Route::get('/settingswebsite',[DashboardController::class,'settingsweb'])->name('Dashboard.settingswebsite');
    Route::get('/settingindexpage',[DashboardController::class,'indexpage'])->name('Dashboard.settingindexpage');
    Route::get('/settingcontactpage',[DashboardController::class,'contactpage'])->name('Dashboard.settingcontactpage');
    Route::get('/settingaboutpage',[DashboardController::class,'aboutpage'])->name('Dashboard.settingaboutpage');
    Route::get('/settingservicespage',[DashboardController::class,'servicespage'])->name('Dashboard.settingservicespage');
    Route::get('/settingportofliopage',[DashboardController::class,'portofliopage'])->name('Dashboard.settingportofliopage');



    /*  Ruote::get('/settings_protfile',[DashboardController::class,'settingsp'])->name('Dashboard.settings_protfile');

*/
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', function(){
    Auth::logout();
    return redirect('login');
});
