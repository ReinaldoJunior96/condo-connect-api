<?php

namespace App\Modules\User\Core\Domain\Usecases;

use App\Modules\User\Core\Domain\Repository\IGetAllUsersRepo;
use RuntimeException;

class GetAllUsersUseCase
{
    public IGetAllUsersRepo $repo;

    public function __construct(IGetAllUsersRepo $repo)
    {
        $this->repo =  $repo;
    }

    public function execute() : array
    {
        return $this->repo->execute();
    }
}
