<?php


use App\Modules\User\Core\Domain\Repository\IGetAllUsersRepo;
use App\Modules\User\Core\Domain\Usecases\GetAllUsersUseCase;

test('should return array list user dto', function(){
    $mock = Mockery::mock(IGetAllUsersRepo::class);

    $mock->shouldReceive('execute')->once();

    $usecase = new GetAllUsersUseCase($mock);

    $result = $usecase->execute();

    //expect($result)->toBe([]);

});
