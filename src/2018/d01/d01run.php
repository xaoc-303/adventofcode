<?php

echo '--- Day 1: Chronal Calibration ---' . PHP_EOL;

/**
 * @link https://adventofcode.com/2018/day/1
 */

include 'd01.php';

$s = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'data.txt');

echo 'd01p1: ' . d01p1($s) . PHP_EOL;
echo 'd01p2: ' . d01p2($s) . PHP_EOL;
