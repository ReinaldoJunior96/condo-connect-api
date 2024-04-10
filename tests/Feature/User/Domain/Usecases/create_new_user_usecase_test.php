<?php

use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use App\Modules\User\Core\Domain\Usecases\CreateNewUserUseCase;
use App\Modules\User\Dto\UserDTO;
use App\Modules\User\Enum\UserTypeEnum;

$dto = new UserDTO(
    'Example',
    'example@gmail.com',
    '123456789',
    UserTypeEnum::RESIDENT
);

test('should call method execute once time', function () use ($dto) {
    $mock = Mockery::mock(ICreateNewUserRepo::class);

    $mock->shouldReceive('execute')->once();

    $usecase = new CreateNewUserUseCase($mock);

    $usecase->execute($dto);

});
test('should return a exception runtime for invalid parameter', function(){

    $repoMock = Mockery::mock(ICreateNewUserRepo::class);

    $useCase = new CreateNewUserUseCase($repoMock);

    $this->expectException(RuntimeException::class);

    $useCase->execute('This arent a DTO');

});
test('check if parameter function is dto type', function() use ($dto) {

    $repoMock = Mockery::mock(ICreateNewUserRepo::class);

    $repoMock->shouldReceive('execute')->once();

    $useCase = new CreateNewUserUseCase($repoMock);


    expect($dto)->toBeInstanceOf(UserDTO::class);

    $useCase->execute($dto);

});





