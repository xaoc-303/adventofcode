<?php

echo '--- Day 2: Inventory Management System ---' . PHP_EOL;

/**
 * @link https://adventofcode.com/2018/day/2
 */

include 'd02.php';

$s = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'data.txt');

echo 'd02p1: ' . d02p1($s) . PHP_EOL;
echo 'd02p2: ' . d02p2($s) . PHP_EOL;
