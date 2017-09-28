<?php

namespace Immortal\Validation\Rules;

class Numeric
{
    public function validate($input, $value): bool
    {

        if (is_numeric($input)) {
            return true;
        }

        return false;
    }
}
