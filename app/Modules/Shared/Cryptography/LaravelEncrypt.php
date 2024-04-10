<?php

namespace App\Modules\Shared\Cryptography;

use Illuminate\Hashing\BcryptHasher;

class LaravelEncrypt implements Encrypt
{

    public function encrypt($hash): string
    {
        $encrypt = new BcryptHasher();
        $hashedPassword = $encrypt->make($hash);
        return $encrypt->check($hash, $hashedPassword) ?  $hashedPassword : '';

    }
}
