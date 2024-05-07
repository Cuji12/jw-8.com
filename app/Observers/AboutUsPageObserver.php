<?php

namespace App\Observers;

use App\Models\AboutUsPage;
use Illuminate\Support\Facades\Cache;

class AboutUsPageObserver
{
    /**
     * Handle the AboutUsPage "created" event.
     */
    public function created(AboutUsPage $aboutUsPage): void
    {
        Cache::forget('about_us_page');
    }

    /**
     * Handle the AboutUsPage "updated" event.
     */
    public function updated(AboutUsPage $aboutUsPage): void
    {
        Cache::forget('about_us_page');
    }

    /**
     * Handle the AboutUsPage "deleted" event.
     */
    public function deleted(AboutUsPage $aboutUsPage): void
    {
        Cache::forget('about_us_page');
    }

    /**
     * Handle the AboutUsPage "restored" event.
     */
    public function restored(AboutUsPage $aboutUsPage): void
    {
        Cache::forget('about_us_page');
    }

    /**
     * Handle the AboutUsPage "force deleted" event.
     */
    public function forceDeleted(AboutUsPage $aboutUsPage): void
    {
        Cache::forget('about_us_page');
    }
}
