<?php

use PHPUnit\Framework\TestCase;

/**
 * Class D01Test
 *
 * @example php vendor/bin/phpunit tests/2018/D01Test.php
 */
class D01Test extends TestCase
{
    public function d01p1_data()
    {
        return [
            ["+1\n+1\n+1", 3],
            ["+1\n+1\n-2", 0],
            ["-1\n-2\n-3", -6],
        ];
    }

    /**
     * @dataProvider d01p1_data
     */
    public function test_d01p1($s, $r)
    {
        $this->assertSame(d01p1($s), $r);
    }

    public function d01p2_data()
    {
        return [
            ["+3\n+3\n+4\n-2\n-4", 10],
            ["-6\n+3\n+8\n+5\n-6", 5],
            ["+7\n+7\n-2\n-7\n-4", 14],
        ];
    }

    /**
     * @dataProvider d01p2_data
     */
    public function test_d01p2($s, $r)
    {
        $this->assertSame(d01p2($s), $r);
    }
}
