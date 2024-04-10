<?php

namespace App\Modules\User\Core\Domain\Repository;

use App\Modules\User\Dto\UserDTO;

interface ICreateNewUserRepo
{
    public function execute(UserDTO $data): UserDTO;
}
