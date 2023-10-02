<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('site.index');
    Route::get('/about-us', 'aboutUs')->name('site.about-us');
    Route::get('/our-solutions', 'ourSolutions')->name('site.our-solutions');
    Route::get('/our-consultants', 'ourConsultants')->name('site.our-consultants');
    Route::get('/case-studies', 'caseStudies')->name('site.case-studies');
    Route::get('/useful-links', 'usefulLinks')->name('site.useful-links');
    Route::get('/contact', 'contact')->name('site.contact');
    Route::get('/pages/{page}', 'page')->name('site.page');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/contact', [ContactController::class, 'mailContactForm']);
});