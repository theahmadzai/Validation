<?php

namespace Immortal\Validation\Rules;

class Required extends AbstractRule
{
    public function validate($input): bool
    {
        return !empty($input);
    }
}
