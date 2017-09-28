<?php

namespace Immortal\Validation\Rules;

class Max extends AbstractRule
{
    public function validate($input, $arg): bool
    {
        if (strlen($input) <= $arg) {
            return true;
        }

        return false;
    }
}
