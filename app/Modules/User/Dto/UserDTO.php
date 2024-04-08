<?php

namespace App\Modules\User\Dto;

use App\Modules\Shared\AbstractDTO;
use App\Modules\User\Enum\UserTypeEnum;

class UserDTO extends AbstractDTO
{
    public function __construct(
        public readonly string $nome,
        public readonly string $email,
        public readonly string $password,
        public readonly UserTypeEnum $type,
    )
    {
    }

}
