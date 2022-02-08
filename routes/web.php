<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeverageController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {

    $user = \App\Models\User::create([
        'firstname'=>'Abhijit',
        'lastname' => 'Paul',
        'email' => 'amitepaul@gmail.com',
        'password' => '12345678',
        //'confirm_password' =>'12345678'
    ]);

    dd($user);

    //return 'about us';
});

Route::resource('beverage',BeverageController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

