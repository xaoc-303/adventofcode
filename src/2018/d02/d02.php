<?php

function d02p1($str)
{
    $ms = explode(PHP_EOL, $str);
    $ac2 = $ac3 = 0;
    foreach ($ms as $s) {
        $m = [];
        for ($i = 0; $i < strlen($s); $i++) {
            isset($m[$s[$i]]) ? $m[$s[$i]]++ : $m[$s[$i]] = 1;
        }

        if (array_search(2, $m)) {
            $ac2++;
        }

        if (array_search(3, $m)) {
            $ac3++;
        }
    }

    return $ac2 * $ac3;
}

function d02p2($str)
{
    $m = explode(PHP_EOL, $str);
    foreach ($m as $k => $s) {
        for ($i = 0; $i < count($m); $i++) {
            if ($i == $k) {
                continue;
            }

            $ac = 0;
            for ($j = 0; $j < strlen($s); $j++) {
                if ($s[$j] != $m[$i][$j]) {
                    $pos = $j;
                    $ac++;
                }

                if ($ac > 1) {
                    continue 2;
                }
            }

            if ($ac == 1) {
                return substr($s, 0, $pos). substr($s, $pos + 1);
            }
        }
    }

    return '';
}
