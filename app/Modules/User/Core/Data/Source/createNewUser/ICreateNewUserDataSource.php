<?php

namespace App\Modules\User\Core\Data\Source\createNewUser;

use App\Modules\User\Dto\UserDTO;

interface ICreateNewUserDataSource
{
    public function execute(UserDTO $data) : UserDTO;
}
