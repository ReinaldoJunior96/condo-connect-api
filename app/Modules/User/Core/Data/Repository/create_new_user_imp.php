<?php

namespace App\Modules\User\Core\Data\Repository;

use App\Modules\User\Core\Data\Source\ICreateNewUserDataSource;
use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;

class CreateNewUserImp implements ICreateNewUserRepo
{

    public ICreateNewUserDataSource $dataSource;

    public function __construct(ICreateNewUserDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function execute()
    {
        $this->dataSource->execute();
    }
}
