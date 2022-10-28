<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\SitemapController;
use App\Http\Controllers\Client\MainController;


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
    return view('client.ui.pages.index');
}); 
Route::get('/about', function () {
    return view('client.ui.pages.about');
});
Route::get('/why', function () {
    return view('client.ui.pages.why');
});
Route::get('/services', function () {
    return view('client.ui.pages.services');
});
Route::get('/project', function () {
    return view('client.ui.pages.project');
});
Route::get('/portfolio', function () {
    return view('client.ui.pages.portfolio');
});
Route::get('/safety-policy', function () {
    return view('client.ui.pages.safety-policy');
});
Route::get('/interior-fit-out-works', function () {
    return view('client.ui.pages.interior-fit-out-works');
});





Route::get('ui/design-services', function () {
    return view('client.ui.pages.design-services');
});
Route::get('ui/suspended-ceiling', function () {
    return view('client.ui.pages.suspended-ceiling');
});
Route::get('ui/partition-works', function () {
    return view('client.ui.pages.partition-works');
});
Route::get('ui/wall-cladding', function () {
    return view('client.ui.pages.wall-cladding');
});

Route::get('ui/flooring', function () {
    return view('client.ui.pages.flooring');
});
Route::get('ui/painting', function () {
    return view('client.ui.pages.painting');
});
Route::get('ui/raised-access-floors', function () {
    return view('client.ui.pages.raised-access-floors');
});
Route::get('ui/glass-works', function () {
    return view('client.ui.pages.glass-works');
});
Route::get('ui/joinery-works', function () {
    return view('client.ui.pages.joinery-works');
});
Route::get('ui/mep-work', function () {
    return view('client.ui.pages.mep-work');
});














Route::get('test-mail', [MainController::class, 'test_mail'])->name('test-mail');

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'sitemap'], function(){
    Route::get('/', [SitemapController::class, 'index'])->name('sitemap.index');
    Route::get('/services', [SitemapController::class, 'services'])->name('sitemap.services');
    Route::get('/blogs', [SitemapController::class, 'blogs'])->name('sitemap.blogs');
});

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'details'])->name('blog.details');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
