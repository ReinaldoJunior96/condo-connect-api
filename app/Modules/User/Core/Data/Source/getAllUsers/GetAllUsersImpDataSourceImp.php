<?php

namespace App\Modules\User\Core\Data\Source\getAllUsers;

use App\Modules\User\Core\Domain\Entities\UserEntity;
use App\Modules\User\Dto\UserDTO;
use App\Modules\User\Enum\UserTypeEnum;

class GetAllUsersImpDataSourceImp implements IGetAllUsersDataSource
{

    public function execute(): array
    {
        $users =  UserEntity::all();

        $userDTOs = [];

        foreach ($users as $user) {
            $userDTOs[] = new UserDTO(
                $user['name'],
                $user['email'],
                '',
                UserTypeEnum::from($user['type']),
            );
        }

        return $userDTOs;
    }
}
