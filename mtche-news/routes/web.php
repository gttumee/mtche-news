<?php

use App\Http\Controllers\ArticleRequest;
use App\Http\Controllers\FrontEndContoller;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::get('lang/{lang}', function ($lang) {
    Session::put('locale', $lang);
    App::setLocale($lang);
    return redirect()->back();
})->name('lang.switch');

Route::controller(FrontEndContoller::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/news', 'news')->name('news');
    Route::get('/page', 'page')->name('page');
    Route::get('/article', 'article')->name('article');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contact')->name('contact');
    Route::post('/comment', 'comment')->name('comment');
    Route::get('/comment', 'comment')->name('comment');
    Route::get('/request', 'artocleRequest')->name('request');
    Route::get('/higth', 'higthArticle')->name('higthArticle');
    Route::get('/higthligths', 'highlightPage')->name('highlightPage');
    Route::post('/request', 'comment')->name('comment');
    Route::get('/request', 'comment')->name('comment');
});

Route::get('/article-request', [ArticleRequest::class, 'index'])->name('article-request');
Route::post('/article-request', [ArticleRequest::class, 'index'])->name('article-request');
Route::post('/email', [ArticleRequest::class, 'email'])->name('email');