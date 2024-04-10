<?php

namespace App\Modules\User\Core\Data\Repository;

use App\Modules\User\Core\Data\Source\getAllUsers\IGetAllUsersDataSource;
use App\Modules\User\Core\Domain\Repository\IGetAllUsersRepo;
use RuntimeException;

class GetAllUsersImp implements IGetAllUsersRepo
{
    public IGetAllUsersDataSource $datasource;

    public function __construct(IGetAllUsersDataSource $datasource)
    {
        $this->datasource = $datasource;
    }

    public function execute(): array
    {
        //throw new RuntimeException('Not implemented');
        return $this->datasource->execute();

    }
}
