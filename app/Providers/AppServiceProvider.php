<?php

namespace App\Providers;

use App\Menu;
use App\News;
use App\Setting;
use App\Category;
use App\Advertisement;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (!$this->app->runningInConsole()) {

            view()->composer(
                [
                    'frontend.layout.partials.header',
                    'frontend.layout.partials.footer'
                ],
                function ($view) {
                    $view->with('headersettings', Setting::first());
                    $view->with('headerads', Advertisement::get());
                }
            );

            view()->composer('frontend.layout.partials.mainmenu', function ($view) {
                $mainmenus = \DB::table('categories')->get()->toArray();
                return $view->with('mainmenus', $mainmenus);
            });

            view()->composer('frontend.layout.partials.header', function ($view) {
                $categoryid = Setting::first();
                $newstickers = News::latest()->whereHas('category')->where('category_id', $categoryid->breaking_news_category_id)->where('status', 1)->get();
                $view->with('newstickers', $newstickers);
            });

            view()->composer('frontend.layout.partials.footer', function ($view) {
                $view->with('footernewscategorylist', Category::has('newslist')->withCount('newslist')->orderBy('name', 'desc')->where('status', 1)->get());
            });

            view()->composer('frontend.pages.sidebar', function ($view) {
                //tin ben le
                $sidebarNews   = News::latest()->whereHas('category')->where('category_id', 5)->where('status', 1)->take(3)->get();
                // tin noi bat
                $popularNews    = News::orderBy('view_count', 'DESC')->whereHas('category')->where('status', 1)->take(5)->get();
                // tin gan day
                $recentNews     = News::latest()->whereHas('category')->where('status', 1)->take(5)->get();
                // tin ngau nhien
                $randomNews  = News::inRandomOrder()->whereHas('category')->where('status', 1)->take(3)->get();
                // danh muc
                $categoryLists  = Category::has('newslist')->withCount('newslist')->orderBy('id')->where('status', 1)->get();

                $view->with(compact(
                    'sidebarNews',

                    'popularNews',
                    'recentNews',
                    'randomNews',
                    'categoryLists'
                ));
            });
        }
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
