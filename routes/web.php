<?php

use App\Http\Controllers\ApiDocController;

use App\Http\Controllers\AgiController;
use App\Http\Controllers\Generator\CategoryController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupConttroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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

/**
 * @author Dodi Priyanto<dodi.priyanto76@gmail.com>
 */

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/api-doc', [ApiDocController::class, 'index'])->name('api_doc');

Auth::routes();

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'roles']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/cek-asterisk', [AgiController::class, 'asteriskCheckConnection'])->name('cek_asterisk_connection');
    Route::get('/test-call-sip', [AgiController::class, 'callToSip'])->name('cek_asterisk_connection');
    Route::get('/delete_file', [DashboardController::class, 'deleteFileContent'])->name('file_delete');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('dashboard_categories');
        Route::get('/get', [CategoryController::class, 'get'])->name('dashboard_categories_detail');
        Route::get('/delete', [CategoryController::class, 'destroy'])->name('dashboard_categories_delete');
        Route::post('/', [CategoryController::class, 'store'])->name('dashboard_categories_post');
        Route::get('/datatable.json', [CategoryController::class, '__datatable'])->name('dashboard_categories_table');

        Route::get('/get-sub', [CategoryController::class, 'getSub'])->name('dashboard_categories_get_sub');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('dashboard_profile');
        Route::post('/', [ProfileController::class, 'store'])->name('dashboard_profile_post');
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', [MenuController::class, 'index'])->name('dashboard_menu');
        Route::get('/get', [MenuController::class, 'get'])->name('dashboard_menu_detail');

        Route::get('/get-parent', [MenuController::class, 'getParent'])->name('dashboard_menu_get_parent');

        Route::get('/delete', [MenuController::class, 'destroy'])->name('dashboard_menu_delete');
        Route::post('/', [MenuController::class, 'store'])->name('dashboard_menu_post');
        Route::get('/datatable.json', [MenuController::class, '__datatable'])->name('dashboard_menu_table');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('dashboard_user');
        Route::get('/get', [UserController::class, 'get'])->name('dashboard_user_detail');
        Route::get('/delete', [UserController::class, 'destroy'])->name('dashboard_user_delete');
        Route::post('/', [UserController::class, 'store'])->name('dashboard_user_post');
        Route::get('/datatable.json', [UserController::class, '__datatable'])->name('dashboard_user_table');
    });

    Route::group(['prefix' => 'group'], function () {
        Route::get('/', [GroupConttroller::class, 'index'])->name('dashboard_group');
        Route::get('/get', [GroupConttroller::class, 'get'])->name('dashboard_group_detail');
        Route::get('/delete', [GroupConttroller::class, 'destroy'])->name('dashboard_group_delete');
        Route::post('/', [GroupConttroller::class, 'store'])->name('dashboard_group_post');
        Route::get('/changeAccess', [GroupConttroller::class, 'changeAccess'])->name('dashboard_group_change_access');
        Route::get('/datatable.json', [GroupConttroller::class, '__datatable'])->name('dashboard_group_table');
        Route::get('/menuAccess.json', [GroupConttroller::class, '__menuAccess'])->name('dashboard_group_menu_access');
    });

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('dashboard_setting');
        Route::get('/get', [SettingController::class, 'get'])->name('dashboard_setting_detail');
        Route::get('/delete', [SettingController::class, 'destroy'])->name('dashboard_setting_delete');
        Route::post('/', [SettingController::class, 'store'])->name('dashboard_setting_post');
        Route::get('/datatable.json', [SettingController::class, '__datatable'])->name('dashboard_setting_table');
    });

    Route::group(['prefix' => 'permission'], function () {
        Route::get('/administrator/permission', [MenuController::class, 'index'])->name('dashboard_permission');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
