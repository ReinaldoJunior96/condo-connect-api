<?php


use App\Modules\User\Core\Data\Source\getAllUsers\IGetAllUsersDataSource;

test('should check if method execute call once time', function(){
    $dataSourceMock = Mockery::mock(IGetAllUsersDataSource::class);

    $dataSourceMock->shouldReceive('execute')->once();

    $implementation = new \App\Modules\User\Core\Data\Repository\GetAllUsersImp($dataSourceMock);

    $implementation->execute();

});


