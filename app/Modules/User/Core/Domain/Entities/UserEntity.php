<?php

namespace App\Modules\User\Core\Domain\Entities;

use App\Modules\User\Enum\UserTypeEnum;
use Illuminate\Database\Eloquent\Model;

class UserEntity extends Model
{
    public string $name;
    public string $email;
    public string $password;
    public UserTypeEnum $type;

    protected $table = 'users';
    protected $fillable = ['name', 'password','email', 'type'];

    protected $hidden = ['password'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->type = UserTypeEnum::RESIDENT;
    }


}
