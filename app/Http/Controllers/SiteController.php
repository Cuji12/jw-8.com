<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class SiteController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * @return View
     */
    public function aboutUs(): View
    {
        return view('about-us');
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        return view('contact');
    }
}
