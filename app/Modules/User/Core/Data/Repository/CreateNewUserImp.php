<?php

namespace App\Modules\User\Core\Data\Repository;

use App\Modules\User\Core\Data\Source\ICreateNewUserDataSource;
use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use App\Modules\User\Dto\UserDTO;
use RuntimeException;

class CreateNewUserImp implements ICreateNewUserRepo
{

    public ICreateNewUserDataSource $dataSource;

    public function __construct(ICreateNewUserDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function execute(UserDTO $data): UserDTO
    {
        return $this->dataSource->execute($data);
    }
}
