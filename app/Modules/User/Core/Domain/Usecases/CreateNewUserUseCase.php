<?php

namespace App\Modules\User\Core\Domain\Usecases;

use App\Modules\Shared\IUserCase;
use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use App\Modules\User\Dto\UserDTO;
use RuntimeException;

class CreateNewUserUseCase implements IUserCase
{
    public ICreateNewUserRepo $repo;

    public function __construct(ICreateNewUserRepo $repo)
    {
        $this->repo = $repo;
    }


    public function execute($data): UserDTO
    {
        if (!($data instanceof UserDTO)) {
            throw new RuntimeException('Parameter invalid');
        }

        return $this->repo->execute($data);
    }
}
