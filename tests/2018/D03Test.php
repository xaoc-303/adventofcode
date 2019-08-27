<?php

use PHPUnit\Framework\TestCase;

/**
 * Class D03Test
 *
 * @example php vendor/bin/phpunit tests/2018/D03Test.php
 */
class D03Test extends TestCase
{
    /**
     * @testWith ["#1 @ 1,3: 4x4\n#2 @ 3,1: 4x4\n#3 @ 5,5: 2x2", 4]
     */
    public function test_d03p1($s, $r)
    {
        $this->assertSame(d03p1($s, true), $r);
    }

    /**
     * @testWith ["#1 @ 1,3: 4x4\n#2 @ 3,1: 4x4\n#3 @ 5,5: 2x2", 3]
     */
    public function test_d03p2($s, $r)
    {
        $this->assertSame(d03p2($s), $r);
    }
}
