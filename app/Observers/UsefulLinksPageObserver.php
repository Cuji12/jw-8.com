<?php

namespace App\Observers;

use App\Models\UsefulLinksPage;
use Illuminate\Support\Facades\Cache;

class UsefulLinksPageObserver
{
    /**
     * Handle the UsefulLinksPage "created" event.
     */
    public function created(UsefulLinksPage $usefulLinksPage): void
    {
        Cache::forget('useful_links_page');
    }

    /**
     * Handle the UsefulLinksPage "updated" event.
     */
    public function updated(UsefulLinksPage $usefulLinksPage): void
    {
        Cache::forget('useful_links_page');
    }

    /**
     * Handle the UsefulLinksPage "deleted" event.
     */
    public function deleted(UsefulLinksPage $usefulLinksPage): void
    {
        Cache::forget('useful_links_page');
    }

    /**
     * Handle the UsefulLinksPage "restored" event.
     */
    public function restored(UsefulLinksPage $usefulLinksPage): void
    {
        Cache::forget('useful_links_page');
    }

    /**
     * Handle the UsefulLinksPage "force deleted" event.
     */
    public function forceDeleted(UsefulLinksPage $usefulLinksPage): void
    {
        Cache::forget('useful_links_page');
    }
}
