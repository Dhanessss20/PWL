<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/hello', function () {
//     return 'Hello World';
// });


// Route::get('/world', function () {
//     return 'World';
// });

// // Route::get('/selamat', function () {
// //     return 'Selamat Datang';
// // });

// // Route::get('/about', function () {
// //     return '2241720037';
// // });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya: '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// // Route::get('/articles/{id}', function ($id) {
// //     return 'Halaman Artikel dengan ID '.$id;
// // });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama Saya: '.$name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama Saya: '.$name;
// });

// ROUTE NAME

// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');

// CONTROLLER
// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/', [WelcomeController::class, 'selamat']);

// Route::get('/about', [WelcomeController::class, 'about']);

// Route::get('/articles/{id}', [WelcomeController::class, 'article']);

//PRAKTIKUM CONTROLLER BAGIAN G

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'index']);

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PhotoController;

Route::get('/articles/{id}', [ArticlesController::class, 'index']);

// Resource Controller
// use App\Http\Controllers\PhotoController;
// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only
(['index', 'show']);
Route::resource('photos', PhotoController::class)->except
(['create', 'store', 'update', 'destroy']);

//VIEW
// Route::get('/greeting', function() {
//     return view('blog.hello', ['name' => 'Dhanes']);
// });

Route::get('/greeting', [WelcomeController::class,
'greeting']);