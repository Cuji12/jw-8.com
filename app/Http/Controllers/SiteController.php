<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CaseStudiesPage;
use App\Models\CaseStudy;
use App\Models\Page;
use App\Models\AboutUsPage;
use App\Models\ContactPage;
use App\Models\OurSolutionsPage;
use App\Models\OurConsultantsPage;
use App\Models\UsefulLinksPage;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Cache;
use Parsedown;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $banners = app('banners');
        $pages = Cache::remember('pages', 3600, function () {
            return Page::where('active', true)->limit(10)->get();
        });

        $case_studies = Cache::remember('case_studies', 3600, function () {
            return CaseStudy::where('active', true)->limit(3)->get();
        });

        return view('index', compact('banners', 'pages', 'case_studies'));
    }

    /**
     * @return View
     */
    public function aboutUs(): View
    {
        $banners = app('banners');
        $content = Cache::remember('about_us_page', 3600, function () {
            return AboutUsPage::where('active', true)->firstOrFail();
        });

        $parsed_body = new Parsedown();
        $content->body = $parsed_body->text($content->body);

        return view('about-us', compact('content', 'banners'));
    }

    /**
     * @return View
     */
    public function ourSolutions(): View
    {
        $banners = app('banners');
        $content = Cache::remember('our_solutions_page', 3600, function () {
            return OurSolutionsPage::where('active', true)->firstOrFail();
        });

        $parsed_body = new Parsedown();
        $content->top_text = $parsed_body->text($content->top_text);
        $content->bottom_text = $parsed_body->text($content->bottom_text);
        $pages = Page::where('active', true)->limit(10)->get();

        return view('our-solutions', compact('content', 'pages', 'banners'));
    }

    /**
     * @return View
     */
    public function ourConsultants(): View
    {
        $banners = app('banners');
        $content = Cache::remember('our_consultants_page', 3600, function () {
            return OurConsultantsPage::where('active', true)->firstOrFail();
        });

        $parsed_body = new Parsedown();
        $content->body = $parsed_body->text($content->body);

        return view('our-consultants', compact('content', 'banners'));
    }

    /**
     * @return View
     */
    public function caseStudies(): View
    {
        $banners = app('banners');
        $content = Cache::remember('case_studies_page', 3600, function () {
           return CaseStudiesPage::where('active', true)->firstOrFail();
        });

        $parsed_body = new Parsedown();
        $content->body = $parsed_body->text($content->body);

        return view('case-studies', compact('content', 'banners'));
    }

    public function usefulLinks(): View
    {
        $banners = app('banners');
        $content = Cache::remember('useful_links_page', 3600, function () {
            return UsefulLinksPage::where('active', true)->firstOrFail();
        });

        $parsed_body = new Parsedown();
        $content->body = $parsed_body->text($content->body);

        return view('useful-links', compact('content', 'banners'));
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        $content = Cache::remember('contact_page', 3600, function () {
            return ContactPage::where('active', true)->firstOrFail();
        });

        $parsed_body = new Parsedown();
        $content->body = $parsed_body->text($content->body);

        return view('contact', compact('content'));
    }


    /**
     * @return View|NotFoundHttpException
     */
    public function page(Request $request, string $page_slug): View|NotFoundHttpException
    {
        try {
            $banners = app('banners');
            $pages = Cache::remember('pages', 3600, function () {
                return Page::where('active', true)->limit(10)->get();
            });
            $content = Page::where('slug', $page_slug)->firstOrFail();
            $parsed_body = new Parsedown();
            $content->body = $parsed_body->text($content->body);
            return view('page', compact('content', 'banners', 'pages'));
        } catch (\Exception $e) {
            return throw new NotFoundHttpException();
        }
    }
}
