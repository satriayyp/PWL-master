<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ArtikelController;
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
Route::get('/',function(){
    echo "selamat Datang";
});
Route::get('/about',function(){
    echo "NIM:204720143<br>";
    echo "Nama: Satria Yudhistira";
});
//Route::get('/article/{id}',function($id){
  //  echo"selamat datang di ID=$id ";
//});
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/article/{id}',[ArticleController::class,'article']);
Route::get('/product',[productController::class,'Product']);
Route::get('/about-us',[productController::class,'about']);
Route::get('/news',[productController::class,'news']);
Route::get('/program',[productController::class,'program']);
//Route::get('/artikel',[productController::class,'artikel']);
Route::get('/Artikel',[ArtikelController::class,'index']);