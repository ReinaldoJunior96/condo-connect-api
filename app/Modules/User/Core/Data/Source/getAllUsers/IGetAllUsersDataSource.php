<?php

namespace App\Modules\User\Core\Data\Source\getAllUsers;

interface IGetAllUsersDataSource
{
    public function execute(): array;
}
