<?php

use App\Http\Controllers\login;
use App\Models\authors;
use App\Models\books;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/signUp', [login::class, "register"]);
Route::post('/login', [login::class, "login"]);
Route::get('/test', function () {
    // echo "test";
    $author = authors::find(3);
    // foreach ($author->books as $book) {
    //     echo $book->bookName . "<br>";
    // }
    dd($author->books); //errrrrrooooooor
    // dd($authors->books);
});
