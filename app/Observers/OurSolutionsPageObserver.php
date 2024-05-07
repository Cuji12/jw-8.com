<?php

namespace App\Observers;

use App\Models\OurSolutionsPage;
use Illuminate\Support\Facades\Cache;

class OurSolutionsPageObserver
{
    /**
     * Handle the OurSolutionsPage "created" event.
     */
    public function created(OurSolutionsPage $ourSolutionsPage): void
    {
        Cache::forget('our_solutions_page');
    }

    /**
     * Handle the OurSolutionsPage "updated" event.
     */
    public function updated(OurSolutionsPage $ourSolutionsPage): void
    {
        Cache::forget('our_solutions_page');
    }

    /**
     * Handle the OurSolutionsPage "deleted" event.
     */
    public function deleted(OurSolutionsPage $ourSolutionsPage): void
    {
        Cache::forget('our_solutions_page');
    }

    /**
     * Handle the OurSolutionsPage "restored" event.
     */
    public function restored(OurSolutionsPage $ourSolutionsPage): void
    {
        Cache::forget('our_solutions_page');
    }

    /**
     * Handle the OurSolutionsPage "force deleted" event.
     */
    public function forceDeleted(OurSolutionsPage $ourSolutionsPage): void
    {
        Cache::forget('our_solutions_page');
    }
}
