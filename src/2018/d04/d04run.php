<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo '--- Day 4: Repose Record ---' . PHP_EOL;

/**
 * @link https://adventofcode.com/2018/day/4
 */

include 'd04.php';

$s = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'data.txt');

echo 'd04p1: ' . d04p1($s) . PHP_EOL;
echo 'd04p2: ' . d04p2($s) . PHP_EOL;
