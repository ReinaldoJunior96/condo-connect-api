<?php

namespace App\Providers;

use App\Modules\Shared\Cryptography\Encrypt;
use App\Modules\Shared\Cryptography\PHPEncripty;
use App\Modules\User\Core\Data\Repository\CreateNewUserImp;
use App\Modules\User\Core\Data\Repository\GetAllUsersImp;
use App\Modules\User\Core\Data\Source\createNewUser\CreateNewUserDataSourceImp;
use App\Modules\User\Core\Data\Source\createNewUser\ICreateNewUserDataSource;
use App\Modules\User\Core\Data\Source\getAllUsers\GetAllUsersImpDataSourceImp;
use App\Modules\User\Core\Data\Source\getAllUsers\IGetAllUsersDataSource;
use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use App\Modules\User\Core\Domain\Repository\IGetAllUsersRepo;
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

       $this->app->bind(IGetAllUsersRepo::class, GetAllUsersImp::class);
       $this->app->bind(IGetAllUsersDataSource::class, GetAllUsersImpDataSourceImp::class);





    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
