--TEST--
https://github.com/sebastianbergmann/phpunit/issues/2145
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--stop-on-error';
$_SERVER['argv'][3] = 'Issue2145Test';
$_SERVER['argv'][4] = __DIR__ . '/2145/Issue2145Test.php';

require __DIR__ . '/../../bootstrap.php';
PHPUnit_TextUI_Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

E

Time: %s, Memory: %sMb

There was 1 error:

1) Test::testOne
Exception:

%s/Issue2145Test.php:10

FAILURES!
Tests: 1, Assertions: 0, Errors: 1.
