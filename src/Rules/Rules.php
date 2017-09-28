<?php

namespace Immortal\Validation\Rules;

class Rules
{
    protected $name;
    protected $template;

    public function runRules()
    {
        $new = [];
        $c   = __NAMESPACE__;

        foreach ($this->rules as $rule => $args) {
            $rulec = "{$c}\\{$rule}";

            $a = new $rulec();
            $a = $a->validate($this->input, $args);

            $new[] = $a;
        }

        return $new;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
