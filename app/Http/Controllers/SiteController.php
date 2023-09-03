<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Application|RedirectResponse|Redirector
     */
    public function page(Request $request, string $page): \Illuminate\Contracts\Foundation\Application|Application|RedirectResponse|Redirector
    {
        try {
            $page = Page::where('slug', $page)->firstOrFail();
            return view('contact', compact('page'));
        } catch (\Exception $e) {
            return throw new NotFoundHttpException();
        }
    }
}
