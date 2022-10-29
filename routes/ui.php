<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\SitemapController;
use App\Http\Controllers\Client\MainController;


Route::group(['prefix' => 'design'], function(){
    Route::get('/', [SitemapController::class, 'index'])->name('sitemap.index');
   
});


