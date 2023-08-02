<?php

use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
     * Home Routes
     */
    //Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/', function () {
        return view('auth/login');
    });

    Route::get('/dashboard', function () {
        $users = \App\Models\User::all();
        return view('dashboard', compact('users'));
    })->middleware(['auth'])->name('dashboard');

    require __DIR__.'/auth.php';

    Route::post('import', function() {
       Excel::import(new UsersImport, request()->file('file'));
       return redirect()->back()->with('success', 'Data Imported Successfully');
    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        //Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {

            Route::get('/', 'App\Http\Controllers\UsersController@index')->name('users.index');
            Route::get('/create', 'App\Http\Controllers\UsersController@create')->name('users.create');
            Route::post('/create', 'App\Http\Controllers\UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'App\Http\Controllers\UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'App\Http\Controllers\UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'App\Http\Controllers\UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'App\Http\Controllers\UsersController@destroy')->name('users.destroy');
        });
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

        //RA1
        Route::get('/ra1/submissions', 'App\Http\Controllers\RaOneController@index')->name('ra1.submissions');
        Route::get('/ra2/submissions', 'App\Http\Controllers\RaTwoController@index')->name('ra2.submissions');
        Route::get('/ra3/submissions', 'App\Http\Controllers\RaThreeController@index')->name('ra3.submissions');

    });


