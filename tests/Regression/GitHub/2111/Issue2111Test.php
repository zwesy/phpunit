<?php
class Issue2111Test extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->assertNotContains('foo', [true]);
    }
}