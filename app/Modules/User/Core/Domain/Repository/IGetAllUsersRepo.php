<?php

namespace App\Modules\User\Core\Domain\Repository;

use App\Modules\User\Dto\UserDTO;

interface IGetAllUsersRepo
{
    public function execute(): array;
}
