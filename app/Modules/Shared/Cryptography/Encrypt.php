<?php

namespace App\Modules\Shared\Cryptography;

interface Encrypt
{
    public function encrypt($hash) : string;
}
