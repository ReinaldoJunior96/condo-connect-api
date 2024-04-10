<?php

use App\Modules\Shared\Cryptography\LaravelEncrypt;
use App\Modules\Shared\Cryptography\PHPEncripty;

test('should return encrypt and string password with PHPEncrypt', function(){

    $string = "123456789";

    $php = new PHPEncripty();

    $result = $php->encrypt('123456789');

    expect($result)->toBeString()
        ->and(password_verify($string, $result))->toBeTrue();

});

test('should return encrypt and string password with LaravelEncrypt', function(){

    $string = "123456789";

    $php = new LaravelEncrypt();

    $result = $php->encrypt('123456789');

    expect($result)->toBeString()
        ->and(password_verify($string, $result))->toBeTrue();

});


