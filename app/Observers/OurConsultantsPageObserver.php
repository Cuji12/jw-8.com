<?php

namespace App\Observers;

use App\Models\OurConsultantsPage;
use Illuminate\Support\Facades\Cache;

class OurConsultantsPageObserver
{
    /**
     * Handle the OurConsultantsPage "created" event.
     */
    public function created(OurConsultantsPage $ourConsultantsPage): void
    {
        Cache::forget('our_consultants_page');
    }

    /**
     * Handle the OurConsultantsPage "updated" event.
     */
    public function updated(OurConsultantsPage $ourConsultantsPage): void
    {
        Cache::forget('our_consultants_page');
    }

    /**
     * Handle the OurConsultantsPage "deleted" event.
     */
    public function deleted(OurConsultantsPage $ourConsultantsPage): void
    {
        Cache::forget('our_consultants_page');
    }

    /**
     * Handle the OurConsultantsPage "restored" event.
     */
    public function restored(OurConsultantsPage $ourConsultantsPage): void
    {
        Cache::forget('our_consultants_page');
    }

    /**
     * Handle the OurConsultantsPage "force deleted" event.
     */
    public function forceDeleted(OurConsultantsPage $ourConsultantsPage): void
    {
        Cache::forget('our_consultants_page');
    }
}
