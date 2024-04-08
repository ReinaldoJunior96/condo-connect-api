<?php

use App\Modules\User\Core\Domain\Repository\ICreateNewUserRepo;
use App\Modules\User\Core\Domain\Usecases\CreateNewUserUseCase;

beforeEach(function () {
   $this->createNewUserImp = Mockery::mock(ICreateNewUserRepo::class);
   $this->usecase = new CreateNewUserUseCase($this->createNewUserImp);
});


test('should check if method in usecase call once time',  function () {
    $this->createNewUserImp->shouldReceive('execute')->once();
    $this->usecase->execute([]);




});
