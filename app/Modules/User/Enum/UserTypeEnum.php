<?php

namespace App\Modules\User\Enum;


enum UserTypeEnum: string
{
    case RESIDENT = "resident";
    case WORKER = "worker";
    case MANAGER = "manager";
}
