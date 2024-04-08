<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Core\Usecases\CreateNewUserUseCase;

class UserController
{
    private CreateNewUserUseCase $createNewUserUseCase;

    public function __construct(
        CreateNewUserUseCase $createNewUserUseCase
    )
    {
        $this->createNewUserUseCase =  $createNewUserUseCase;
    }


    public function createANewUser(): void
    {
        $this->createNewUserUseCase->execute();
    }
}
