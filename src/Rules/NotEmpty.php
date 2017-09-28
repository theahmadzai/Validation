<?php

namespace Immortal\Validation\Rules;

class NotEmpty
{
    public function validate($input, $value): bool
    {
        if (empty($input)) {
            return false;
        }

        return true;
    }
}
