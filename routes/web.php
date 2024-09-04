<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticlesController;

//NOMOR 2 PRAKTIKUM 3
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Ingga']);
// });

//NOMOR 6
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Ingga']);
// });
    
//NOMOR 9
Route::get('/greeting', [WelcomeController::class, 'greeting']);


//NOMOR 11
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//    ]);
   

//NOMOR 8
// Route::resource('photos', PhotoController::class);


//NOMOR 7
// Route::get('/', [HomeController::class,'index']);
// Route::get('about', [AboutController::class,'about']);
// Route::get('articles/{id}', [ArticlesController::class,'articles']);

//NOMOR 6
// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::get('/hello', [WelcomeController::class,'hello']);


// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'INGGA CHINTIA SARI (2241760018)';
// });

// Route::get('/user/{ingga}', function ($ingga) {
//     return 'Nama Saya '.$ingga;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke- '.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('DATADIRI');
// });

