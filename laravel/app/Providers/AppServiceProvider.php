<?php

namespace App\Providers;

use App\Http\Repositories\PayRepository;
use App\Http\Repositories\PayRepositoryInterface;
use App\Http\Services\PayService;
use App\Http\Services\PayServiceInterface;
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
        $this->app->bind(PayServiceInterface::class,PayService::class);
        $this->app->bind(PayRepositoryInterface::class,PayRepository::class );
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
