<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('user', User::class);
        $this->app->bind('blog', Blog::class);
        $this->app->bind('tag', Tag::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
