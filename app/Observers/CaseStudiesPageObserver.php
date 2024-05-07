<?php

namespace App\Observers;

use App\Models\CaseStudiesPage;
use Illuminate\Support\Facades\Cache;

class CaseStudiesPageObserver
{
    /**
     * Handle the CaseStudiesPage "created" event.
     */
    public function created(CaseStudiesPage $caseStudiesPage): void
    {
        Cache::forget('case_studies_page');
    }

    /**
     * Handle the CaseStudiesPage "updated" event.
     */
    public function updated(CaseStudiesPage $caseStudiesPage): void
    {
        Cache::forget('case_studies_page');
    }

    /**
     * Handle the CaseStudiesPage "deleted" event.
     */
    public function deleted(CaseStudiesPage $caseStudiesPage): void
    {
        Cache::forget('case_studies_page');
    }

    /**
     * Handle the CaseStudiesPage "restored" event.
     */
    public function restored(CaseStudiesPage $caseStudiesPage): void
    {
        Cache::forget('case_studies_page');
    }

    /**
     * Handle the CaseStudiesPage "force deleted" event.
     */
    public function forceDeleted(CaseStudiesPage $caseStudiesPage): void
    {
        Cache::forget('case_studies_page');
    }
}
