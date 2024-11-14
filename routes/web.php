<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', ['author' => 'Arif Maulana', 'title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Page About']);
});

Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Page Gallery', 'post' => post::all()]);
});

Route::get('gallery/{post:slug}', function (Post $post) {
    return view('gallery_detail', ['title' => 'single data', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Page Contact']);
});