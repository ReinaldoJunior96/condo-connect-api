<?php


test('should return list of the users', function(){


    $t =  new \App\Modules\User\Core\Data\Source\getAllUsers\GetAllUsersImpDataSourceImp();

    $result = $t->execute();

    //var_dump($result);
});
