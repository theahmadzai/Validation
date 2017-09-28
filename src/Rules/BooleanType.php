<?php

namespace Immortal\Validation\Rules;

class BooleanType extends AbstractRule
{
    public function validate($input): bool
    {
        return is_bool($input);
    }
}
