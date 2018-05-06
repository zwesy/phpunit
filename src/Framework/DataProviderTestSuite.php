<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

class DataProviderTestSuite extends TestSuite
{
    /**
     * Sets the dependencies of a TestCase.
     *
     * @param string[] $dependencies
     */
    public function setDependencies(array $dependencies): void
    {
        foreach ($this->tests as $test) {
            $test->setDependencies($dependencies);
        }
    }

    public function getDependencies(): array
    {
        $deps = array_map(
                function ($test) {
                    return $test->getDependencies();
                }, $this->tests
            );
        $deps = array_filter(
            $deps,
            function ($d) {
                return !empty($d);
            }
        );
        return $deps;
    }

    public function hasDependencies(): bool
    {
        return \count($this->getDependencies()) > 0;
    }
}
