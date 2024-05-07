<?php

namespace App\Observers;

use App\Models\ContactPage;
use Illuminate\Support\Facades\Cache;

class ContactPageObserver
{
    /**
     * Handle the ContactPage "created" event.
     */
    public function created(ContactPage $contactPage): void
    {
        Cache::forget('contact_page');
    }

    /**
     * Handle the ContactPage "updated" event.
     */
    public function updated(ContactPage $contactPage): void
    {
        Cache::forget('contact_page');
    }

    /**
     * Handle the ContactPage "deleted" event.
     */
    public function deleted(ContactPage $contactPage): void
    {
        Cache::forget('contact_page');
    }

    /**
     * Handle the ContactPage "restored" event.
     */
    public function restored(ContactPage $contactPage): void
    {
        Cache::forget('contact_page');
    }

    /**
     * Handle the ContactPage "force deleted" event.
     */
    public function forceDeleted(ContactPage $contactPage): void
    {
        Cache::forget('contact_page');
    }
}
