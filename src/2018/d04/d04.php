<?php

function d04p1($str)
{
    $str = explode(PHP_EOL, $str);
    sort($str);
    $str = implode(PHP_EOL, $str);

    preg_match_all('/\[(.+) (?<hour>\d+):(?<minute>\d+)\] (Guard #(?<id>\d+).+)?(?<text>.+)/m', $str, $matches, PREG_SET_ORDER, 0);

    $guards = [];
    $sleeps = [];
    foreach ($matches as $m) {
        if (!empty($m['id'])) {
            $id = $m['id'];
            $sleep_start = 0;
        }

        if ($m['text'] == 'falls asleep') {
            $sleep_start = $m['minute'];
        }

        if ($m['text'] == 'wakes up' && $m['hour'] == 0) {
            for ($i = $sleep_start; $i < $m['minute']; $i++) {
                $guards[$id][$i] = isset($guards[$id][$i]) ? $guards[$id][$i] + 1 : 1;
                $sleeps[$id] = isset($sleeps[$id]) ? $sleeps[$id] + 1 : 1;
            }
        }
    }
    
    arsort($sleeps);
    $id = key($sleeps);

    arsort($guards[$id]);
    $minute = key($guards[$id]);

    return $id * $minute;
}

function d04p2($str)
{
    $str = explode(PHP_EOL, $str);
    sort($str);
    $str = implode(PHP_EOL, $str);

    preg_match_all('/\[(.+) (?<hour>\d+):(?<minute>\d+)\] (Guard #(?<id>\d+).+)?(?<text>.+)/m', $str, $matches, PREG_SET_ORDER, 0);

    $guards = [];
    $sleeps = [];
    foreach ($matches as $m) {
        if (!empty($m['id'])) {
            $id = $m['id'];
            $sleep_start = 0;
        }

        if ($m['text'] == 'falls asleep') {
            $sleep_start = $m['minute'];
        }

        if ($m['text'] == 'wakes up' && $m['hour'] == 0) {
            for ($i = $sleep_start; $i < $m['minute']; $i++) {
                $guards[$id][$i] = isset($guards[$id][$i]) ? $guards[$id][$i] + 1 : 1;
                $sleeps[$id] = isset($sleeps[$id])
                    ? ($guards[$id][$i] > $sleeps[$id] ? $guards[$id][$i] : $sleeps[$id])
                    : 1;
            }
        }
    }

    arsort($sleeps);
    $id = key($sleeps);

    arsort($guards[$id]);
    $minute = key($guards[$id]);

    return $id * $minute;
}
