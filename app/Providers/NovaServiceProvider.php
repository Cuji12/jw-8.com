<?php

namespace App\Providers;

use App\Nova\AboutUsPage;
use App\Nova\Banner;
use App\Nova\CaseStudiesPage;
use App\Nova\CaseStudy;
use App\Nova\OurConsultantsPage;
use App\Nova\OurSolutionsPage;
use App\Nova\Page;
use App\Nova\UsefulLinksPage;
use App\Nova\User;
use App\Nova\ContactPage;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuGroup;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Illuminate\Http\Request;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::withBreadcrumbs();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::make('Pages', [
                    MenuGroup::make('Home', [
                        Menuitem::resource(Page::class),
                        Menuitem::resource(CaseStudy::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('About Us', [
                        MenuItem::resource(AboutUsPage::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('Our Solutions', [
                        MenuItem::resource(OurSolutionsPage::class),
                        Menuitem::resource(Page::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('Our Consultants', [
                        MenuItem::resource(OurConsultantsPage::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('Case Studies', [
                        MenuItem::resource(CaseStudiesPage::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('Contact Us', [
                        MenuItem::resource(ContactPage::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('Useful Links', [
                        MenuItem::resource(UsefulLinksPage::class),
                    ])->collapsedByDefault(),
                    MenuGroup::make('Banners', [
                        Menuitem::resource(Banner::class),
                    ])->collapsedByDefault(),

                ])->icon('document-text')->collapsedByDefault(),
                MenuSection::make('Users', [
                    MenuItem::resource(User::class)
                ])->icon('user')->collapsable(),
            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'cu.janeway@gmail.com',
                'john.westby@jw-8.com',
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
