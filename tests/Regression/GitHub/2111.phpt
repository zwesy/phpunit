--TEST--
GH-2111: assertNotContains fails if array contains boolean
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][3] = 'Issue2111Test';
$_SERVER['argv'][4] = dirname(__FILE__) . '/2111/Issue2111Test.php';

require __DIR__ . '/../../bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.

Time: %s, Memory: %s

OK (1 test, 0 assertions)
