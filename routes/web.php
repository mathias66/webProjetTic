<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\webProjetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailSender;
use App\Http\Controllers\PhotoController ;

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
    return view('laravel');
});

Route::get('/register', function () {
    return view('webProjetDb/clientViews.register');
})->name('register');

Route::get('/signin', function () {
    return view('webProjetDb/clientViews.signin');
})->name('signin');

Route::get('/index', function () {
    return view('webProjetDb/clientViews.index');
})->name('index');

Route::get('/properties', function () {
    return view('webProjetDb/clientViews.properties');
})->name('properties');

Route::get('/propertiesDetail', function () {
    return view('webProjetDb/clientViews.properties-detail');
})->name('propertiesDetail');

Route::get('/contact', function () {
    return view('webProjetDb/clientViews.contact');
})->name('contact');

Route::get('/404page', function () {
    return view('webProjetDb/clientViews.404');
})->name('404page');

Route::get('/gallery', function () {
    return view('webProjetDb/clientViews.gallery');
})->name('gallery');

Route::get('/blogArchive', function () {
    return view('webProjetDb/clientViews.blog-archive');
})->name('blogArchive');

Route::get('/blogSingle', function () {
    return view('webProjetDb/clientViews.blog-single');
})->name('blogSingle');



Route::get('/overViews', function () {
    return view('webProjetDb/clientViews.vue');
})->name('overViews');

Route::get('/getData', function () {
    return view('webProjetDb/clientViews.getDataFromDb');
})->name('getData');



Route::get('/home', [webProjetController::class, 'index'])->name('home');


Route::get('/create', [webProjetController::class, 'create'])->name('create');

Route::post('/store', [webProjetController::class, 'store'])->name('store_contact');
Route::get('/show/{phone}', [webProjetController::class, 'show'])->name('show');
Route::get('/edit/{id}', [webProjetController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [webProjetController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [webProjetController::class, 'destroy'])->name('delete');

Route::get('/usersForm', [webProjetController::class, 'getForm'])->name('userForm');
Route::post('/usersForm', [webProjetController::class, 'postForm'])->name('userForm');

Route::get('/usersFormContacte', [ContactController::class, 'getContact'])->name('userFormContacte');
Route::post('/usersFormContacte', [ContactController::class, 'postContact'])->name('userFormContacte');

Route::post('/sendEmail',[MailSender::class,'sendEmail'])->name('sendEmail');
Route::get('/list', [MailSender::class,'list'])->name('list');

Route::post('/sendPhoto',[PhotoController::class,'sendPhoto'])->name('sendPhoto');
Route::get('/getPhoto', [PhotoController::class,'getPhoto'])->name('getPhoto');
