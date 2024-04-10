<?php


use App\Modules\Shared\Cryptography\PHPEncripty;
use App\Modules\User\Core\Data\Source\CreateNewUserDataSourceImp;
use App\Modules\User\Dto\UserDTO;
use App\Modules\User\Enum\UserTypeEnum;
use Illuminate\Foundation\Testing\RefreshDatabase;

test('class implemented', function(){

    $imp = new CreateNewUserDataSourceImp(new PHPEncripty());

    $dto = new UserDTO(
        'Reinaldo',
        'reinaldo@gmail.com',
        'reinaldo@123',
        UserTypeEnum::RESIDENT
    );



    $result = $imp->execute($dto);
    $this->assertDatabaseHas('users',[
        'name' => 'Reinaldo',
    ]);
    // Verificando se a senha foi criptografada corretamente
   //expect($result->password)->toBe('senha_criptografada');
});
