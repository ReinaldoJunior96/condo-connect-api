<?php


use App\Modules\User\Core\Data\Repository\CreateNewUserImp;
use App\Modules\User\Core\Data\Source\createNewUser\ICreateNewUserDataSource;
use App\Modules\User\Dto\UserDTO;
use App\Modules\User\Enum\UserTypeEnum;

test('Should call once time method execute', function(){
    $repoMock = Mockery::mock(ICreateNewUserDataSource::class);

    $dto = new UserDTO(
        'Reinaldo',
        'reinaldo@gmail.com',
        '123',
        UserTypeEnum::RESIDENT
    );

    $repoMock->shouldReceive('execute')->with($dto)->once();

    $imp = new CreateNewUserImp($repoMock);

    $imp->execute($dto);

});



