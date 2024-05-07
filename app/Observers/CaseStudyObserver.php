<?php

namespace App\Observers;

use App\Models\CaseStudy;
use Illuminate\Support\Facades\Cache;

class CaseStudyObserver
{
    /**
     * Handle the CaseStudy "created" event.
     */
    public function created(CaseStudy $caseStudy): void
    {
        Cache::forget('case_studies');
    }

    /**
     * Handle the CaseStudy "updated" event.
     */
    public function updated(CaseStudy $caseStudy): void
    {
        Cache::forget('case_studies');
    }

    /**
     * Handle the CaseStudy "deleted" event.
     */
    public function deleted(CaseStudy $caseStudy): void
    {
        Cache::forget('case_studies');
    }

    /**
     * Handle the CaseStudy "restored" event.
     */
    public function restored(CaseStudy $caseStudy): void
    {
        Cache::forget('case_studies');
    }

    /**
     * Handle the CaseStudy "force deleted" event.
     */
    public function forceDeleted(CaseStudy $caseStudy): void
    {
        Cache::forget('case_studies');
    }
}
