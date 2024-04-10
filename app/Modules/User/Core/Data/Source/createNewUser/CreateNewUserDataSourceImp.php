<?php

namespace App\Modules\User\Core\Data\Source\createNewUser;

use App\Modules\Shared\Cryptography\Encrypt;
use App\Modules\User\Core\Domain\Entities\UserEntity;
use App\Modules\User\Dto\UserDTO;
use Illuminate\Support\Carbon;
use RuntimeException;

class CreateNewUserDataSourceImp implements ICreateNewUserDataSource
{
    public Encrypt $cripto;

    public function __construct(Encrypt $encrypt)
    {
        $this->cripto = $encrypt;
    }

    public function execute(UserDTO $data): UserDTO
    {

        $user = UserEntity::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => $this->cripto->encrypt($data->password),
            'type' => $data->type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if (!$user) {
            throw new RuntimeException('Falha ao criar o usuário.');
        }

        return new UserDTO(
            $data->name,
            $data->email,
            '',
            $data->type
        );

    }

}
