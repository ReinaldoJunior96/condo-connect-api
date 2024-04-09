<?php

use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use App\Modules\User\Core\Domain\Usecases\CreateNewUserUseCase;
use App\Modules\User\Dto\UserDTO;
use App\Modules\User\Enum\UserTypeEnum;


beforeEach(function () {


});

test('should return a exception for invalid parameter', function(){
    $repoMock = Mockery::mock(ICreateNewUserRepo::class);

    $useCase = new CreateNewUserUseCase($repoMock);

    $this->expectException(RuntimeException::class);

    $useCase->execute('This arent a DTO');

});

test('check if parameter in function is dto type', function(){

    $repoMock = Mockery::mock(ICreateNewUserRepo::class);

    $repoMock->shouldReceive('execute')->andReturnNull();

    $useCase = new CreateNewUserUseCase($repoMock);

    $dto = new UserDTO(
        'Reinaldo',
        'reinaldo@gmail.com',
        '123',
        UserTypeEnum::RESIDENT
    );

    expect($dto)->toBeInstanceOf(UserDTO::class);

    $useCase->execute($dto);


});

//test('should check if method in usecase call once time',  function () {
//    $this->createNewUserImp->shouldReceive('execute')->once();
//    $result = $this->usecase->execute([]);
//    expect($result, true);
//});


