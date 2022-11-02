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
Route::get('/blog', function () {
    return view('client.ui.pages.blog');
});
Route::get('/blog_details', function () {
    return view('client.ui.pages.blog_details');
});  

Route::get('/pastoral_care', function () {
    return view('client.ui.pages.pastoral_care');
});  

Route::get('/health_wellbeing', function () {
    return view('client.ui.pages.health_wellbeing');
});  

Route::get('/security_safety', function () {
    return view('client.ui.pages.security_safety');
});

Route::get('/food_nutrition', function () {
    return view('client.ui.pages.food_nutrition');
});  


Route::get('/admission', function () {
    return view('client.ui.pages.admission');
});  

Route::get('/withdrawal_policy', function () {
    return view('client.ui.pages.withdrawal_policy');
});  

Route::get('/affiliation_cbse', function () {
    return view('client.ui.pages.affiliation_cbse');
});  


Route::get('/library', function () {
    return view('client.ui.pages.library');
});  

Route::get('/career_guidance_cell', function () {
    return view('client.ui.pages.career_guidance_cell');
});  

Route::get('/curriculum', function () {
    return view('client.ui.pages.curriculum');
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

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
