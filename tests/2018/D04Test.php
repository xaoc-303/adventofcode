<?php

use PHPUnit\Framework\TestCase;

/**
 * Class D04Test
 *
 * @example php vendor/bin/phpunit tests/2018/D04Test.php
 */
class D04Test extends TestCase
{
    public function d04_data()
    {
        return [
            ["[1518-11-01 00:00] Guard #10 begins shift
[1518-11-01 00:05] falls asleep
[1518-11-01 00:25] wakes up
[1518-11-01 00:30] falls asleep
[1518-11-01 00:55] wakes up
[1518-11-01 23:58] Guard #99 begins shift
[1518-11-02 00:40] falls asleep
[1518-11-02 00:50] wakes up
[1518-11-03 00:05] Guard #10 begins shift
[1518-11-03 00:24] falls asleep
[1518-11-03 00:29] wakes up
[1518-11-04 00:02] Guard #99 begins shift
[1518-11-04 00:36] falls asleep
[1518-11-04 00:46] wakes up
[1518-11-05 00:03] Guard #99 begins shift
[1518-11-05 00:45] falls asleep
[1518-11-05 00:55] wakes up"],
        ];
    }

    /**
     * @dataProvider d04_data
     */
    public function test_d01p1($s)
    {
        $this->assertSame(d04p1($s), 240);
    }

    /**
     * @dataProvider d04_data
     */
    public function test_d04p2($s)
    {
        $this->assertSame(d04p2($s), 4455);
    }
}
