<?php

function d01p1($s)
{
    $ac = 0;
    $m = array_map(function ($n) {return (int)$n;}, explode(PHP_EOL, $s));
    foreach ($m as $k => $v) {
        $ac += $v;
    }

    return $ac;
}

function d01p2($s)
{
    $ac = 0;
    $m = array_map(function ($n) {return (int)$n;}, explode(PHP_EOL, $s));
    $t = [];
    while (1) {
        for ($i = 0; $i < count($m); $i++) {
            $ac += $m[$i];
            if (isset($t[$ac])) {
                return $ac;
            }
            $t[$ac] = $m[$i];
        }
    }

    return '';
}
