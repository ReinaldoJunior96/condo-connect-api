<?php

namespace App\Providers;

use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       // $this->app->bind(ICreateNewUserRepo::class, );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
