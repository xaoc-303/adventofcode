<?php

use PHPUnit\Framework\TestCase;

/**
 * Class D02Test
 *
 * @example php vendor/bin/phpunit tests/2018/D02Test.php
 */
class D02Test extends TestCase
{
    /**
     * @testWith ["abcdef\nbababc\nabbcde\nabcccd\naabcdd\nabcdee\nababab", 12]
     */
    public function test_d02p1($s, $r)
    {
        $this->assertEquals(d02p1($s), $r);
    }

    /**
     * @testWith ["abcde\nfghij\nklmno\npqrst\nfguij\naxcye\nwvxyz", "fgij"]
     */
    public function test_d02p2($s, $r)
    {
        $this->assertSame(d02p2($s), $r);
    }
}
