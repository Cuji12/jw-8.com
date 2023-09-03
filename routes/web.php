<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::controller(SiteController::class)->group(function () {
   Route::get('/', 'index')->name('site.index');
   Route::get('/about-us', 'aboutUs')->name('site.about-us');
   Route::get('/contact', 'contact')->name('site.contact');
   Route::get('/pages/{page}', 'page')->name('site.page');
});
