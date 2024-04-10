<?php

namespace App\Modules\Shared\Cryptography;

class PHPEncripty implements Encrypt
{

    public function encrypt($hash): string
    {
        $hashedPassword = password_hash($hash, PASSWORD_DEFAULT);
        return password_verify($hash, $hashedPassword) ? $hashedPassword : '';
    }
}
