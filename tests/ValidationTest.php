<?php

use Immortal\Validation\Validation;
use PHPUnit\Framework\TestCase;

final class ValidationTest extends TestCase
{
    public function test_Constructor()
    {
        $validation = new Validation();
        $this->assertInstanceOf(Validation::class, $validation);
    }

    public function test_Validate()
    {
        $validation = new Validation();
        $test       = $validation->validate('sdf');
        $this->assertFalse($test);
    }
}
