<?php

namespace Immortal\Validation\Rules;

class IntegerType extends AbstractRule
{
    public function validate($input): bool
    {
        return is_integer($input);
    }
}
