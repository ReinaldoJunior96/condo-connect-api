<?php

namespace App\Providers;

use App\Modules\Shared\Cryptography\Encrypt;
use App\Modules\Shared\Cryptography\PHPEncripty;
use App\Modules\User\Core\Data\Repository\CreateNewUserImp;
use App\Modules\User\Core\Data\Source\CreateNewUserDataSourceImp;
use App\Modules\User\Core\Data\Source\ICreateNewUserDataSource;
use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

       $this->app->bind(ICreateNewUserRepo::class, CreateNewUserImp::class);
       $this->app->bind(ICreateNewUserDataSource::class, CreateNewUserDataSourceImp::class);
       $this->app->bind(Encrypt::class, PHPEncripty::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
