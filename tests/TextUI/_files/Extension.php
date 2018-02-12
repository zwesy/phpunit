<?php
namespace PHPUnit\Test;

use PHPUnit\Runner\AfterLastTestHook;
use PHPUnit\Runner\BeforeFirstTestHook;

final class Extension implements BeforeFirstTestHook, AfterLastTestHook
{
    public function executeAfterLastTest(): void
    {
        print __METHOD__ . PHP_EOL;
    }

    public function executeBeforeFirstTest(): void
    {
        print __METHOD__ . PHP_EOL;
    }
}
