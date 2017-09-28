<?php

namespace Immortal\Validation\Interfaces;

interface RuleInterface
{
    function validate($input, $arg): bool;
}
