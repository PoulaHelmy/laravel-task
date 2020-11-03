<?php

namespace App\Providers;

use App\Http\Repositories\Eloquent\PostsCacheRepository;
use App\Http\Repositories\Eloquent\PostsRepository;
use App\Http\Repositories\Interfaces\PostsRepositoryInterface;
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
        $this->app->bind(PostsRepositoryInterface::class,PostsCacheRepository::class);
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
