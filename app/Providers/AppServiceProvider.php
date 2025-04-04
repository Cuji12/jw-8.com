<?php

namespace App\Providers;

use App\Models\AboutUsPage;
use App\Models\Banner;
use App\Models\CaseStudiesPage;
use App\Models\CaseStudy;
use App\Models\ContactPage;
use App\Models\OurConsultantsPage;
use App\Models\OurSolutionsPage;
use App\Models\Page;
use App\Models\UsefulLinksPage;
use App\Observers\AboutUsPageObserver;
use App\Observers\BannerObserver;
use App\Observers\CaseStudiesPageObserver;
use App\Observers\CaseStudyObserver;
use App\Observers\ContactPageObserver;
use App\Observers\OurConsultantsPageObserver;
use App\Observers\OurSolutionsPageObserver;
use App\Observers\PageObserver;
use App\Observers\UsefulLinksPageObserver;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register observers
        Banner::observe(BannerObserver::class);
        AboutUsPage::observe(AboutUsPageObserver::class);
        CaseStudiesPage::observe(CaseStudiesPageObserver::class);
        CaseStudy::observe(CaseStudyObserver::class);
        ContactPage::observe(ContactPageObserver::class);
        OurConsultantsPage::observe(OurConsultantsPageObserver::class);
        OurSolutionsPage::observe(OurSolutionsPageObserver::class);
        Page::observe(PageObserver::class);
        UsefulLinksPage::observe(UsefulLinksPageObserver::class);

        $this->app->singleton('banners', function () {
           return Cache::remember('banners', 3600, function () {
               return Banner::where('active', true)->limit(3)->get();
           });
        });
    }
}
