<?php

namespace Immortal\Validation\Rules;

class Text
{
    public function validate($input, $value): bool
    {

        if (is_string($input)) {
            return true;
        }

        return false;
    }
}
