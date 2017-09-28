<?php

namespace Immortal\Validation;

use Immortal\Validation\Rules\Rules;

class Validator extends Rules
{
    public function validate($input = null)
    {
        $this->input = $input;
        echo $this->name;

        return $this->runRules();
    }

    public function __call($name, $args)
    {
        $this->rules[ucfirst($name)] = $args;

        return $this;
    }
}
