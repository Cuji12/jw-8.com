<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CaseStudy;
use App\Models\Page;
use App\Models\AboutUsPage;
use App\Models\OurSolutionsPage;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Parsedown;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $banners = Banner::where('active', true)->limit(3)->get();
        $pages = Page::where('active', true)->limit(10)->get();
        $case_studies = CaseStudy::where('active', true)->limit(3)->get();

        return view('index', compact('banners', 'pages', 'case_studies'));
    }

    /**
     * @return View
     */
    public function aboutUs(): View
    {
        $content = AboutUsPage::where('active', true)->firstOrFail();
        $parsed_body = new Parsedown();
        $content->body = $parsed_body->text($content->body);

        return view('about-us', compact('content'));
    }

    /**
     * @return View
     */
    public function ourSolutions(): View
    {
        $content = OurSolutionsPage::where('active', true)->firstOrFail();
        $parsed_body = new Parsedown();
        $content->top_text = $parsed_body->text($content->top_text);
        $content->bottom_text = $parsed_body->text($content->bottom_text);
        $pages = Page::where('active', true)->limit(10)->get();

        return view('our-solutions', compact('content', 'pages'));
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
