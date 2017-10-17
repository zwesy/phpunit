--TEST--
GH-2153: Test listeners are not called correctly when a test triggers a warning
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--log-junit';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'Issue2153Test';
$_SERVER['argv'][5] = __DIR__ . '/2153/Issue2153Test.php';

require __DIR__ . '/../../bootstrap.php';

PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

W                                                                   1 / 1 (100%)<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="Test" file="%s/Issue2153Test.php" tests="1" assertions="0" failures="0" errors="0" time="%s">
    <testcase name="testOne" class="Issue2153Test" file="%s/Issue2153Test.php" line="7" assertions="0" time="%s">
      <warning type="PHPUnit\Framework\Warning">Warning
The data provider specified for Test::testOne is invalid.
Method doesNotExist does not exist
      </warning>
    </testcase>
  </testsuite>
</testsuites>


Time: %s, Memory: %s

There was 1 warning:

1) Warning
The data provider specified for Issue2153Test::testOne is invalid.
Method doesNotExist does not exist

WARNINGS!
Tests: 1, Assertions: 0, Warnings: 1.
