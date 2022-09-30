<?php

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    $user = User::first();
    $colors = [
        'Red',
        'Blue',
        'Purple',
        'Yellow',
        'Green'
    ];

    $user->favorite_color = Arr::random($colors);

    return view('welcome', compact('user'));
});
