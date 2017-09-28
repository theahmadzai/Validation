<?php

namespace Immortal\Validation\Rules;

class StringType extends AbstractRule
{
    public function validate($input): bool
    {
        return is_string($input);
    }
}
