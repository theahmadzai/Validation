<?php

namespace Immortal\Validation\Interfaces;

interface ValidatorInterface
{
    public function validate(array $input, array $rules = []): void;
}
