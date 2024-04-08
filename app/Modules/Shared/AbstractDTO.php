<?php

namespace App\Modules\Shared;

use Illuminate\Contracts\Support\Arrayable;

class AbstractDTO implements  Arrayable
{

    public function toArray(): array
    {
        return $this->all();

    }

    public function all(): array
    {
        return get_object_vars($this);
    }
}
