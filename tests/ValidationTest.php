<?php

use Immortal\Validation\Validator;
use PHPUnit\Framework\TestCase;

final class ValidationTest extends TestCase
{
    public function test_Constructor()
    {
        $validation = new Validator();

        $this->assertInstanceOf(Validator::class, $validation);
    }
}
