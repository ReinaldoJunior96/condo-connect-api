<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Core\Domain\Usecases\CreateNewUserUseCase;
use App\Modules\User\Core\Domain\Usecases\GetAllUsersUseCase;
use App\Modules\User\Dto\UserDTO;
use App\Modules\User\Enum\UserTypeEnum;
use Illuminate\Http\Request;

class UserController
{
    private CreateNewUserUseCase $createNewUserUseCase;
    private GetAllUsersUseCase $getAllUsersUseCase;

    public function __construct(
        CreateNewUserUseCase $createNewUserUseCase,
        GetAllUsersUseCase $getAllUsersUseCase
    )
    {
        $this->createNewUserUseCase =  $createNewUserUseCase;
        $this->getAllUsersUseCase =  $getAllUsersUseCase;
    }


    public function createANewUser(Request $request): void
    {

        $dto = new UserDTO(
            $request->name,
            $request->email,
            $request->password,
            UserTypeEnum::from($request->type),
        );

        $this->createNewUserUseCase->execute($dto);
    }

    public function getAllUsers()
    {
        return $this->getAllUsersUseCase->execute();
    }
}
