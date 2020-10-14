<?php

use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{
    public function testBasicAssertVersionConstantIsDefined()
    {
        $bla = 'JonnyJimAndJack';
        $this->assertSame('JonnyJimAndJack', $bla);
    }
}
