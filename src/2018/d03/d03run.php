<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo '--- Day 3: No Matter How You Slice It ---' . PHP_EOL;

/**
 * @link https://adventofcode.com/2018/day/3
 */

include 'd03.php';

$s = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'data.txt');

echo 'd03p1: ' . d03p1($s) . PHP_EOL;
echo 'd03p2: ' . d03p2($s) . PHP_EOL;
