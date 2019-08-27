<?php

function d03prepare($str) {
    return array_map(function ($s) {
        $re = '/#(\d+).+?@.+?(\d+),(\d+):.+?(\d+)x(\d+)/m';
        preg_match_all($re, $s, $matches, PREG_SET_ORDER, 0);
        return [$matches[0][1], $matches[0][2], $matches[0][3], $matches[0][4], $matches[0][5]];

    }, explode(PHP_EOL, $str));
}

function mapUpdate(&$map, $id, $x_, $y_, $w, $h)
{
    for ($y = $y_; $y < $y_ + $h; $y++) {
        for ($x = $x_; $x < $x_ + $w; $x++) {
            $map[$y][$x] = isset($map[$y][$x]) ? 'x' : $id;
        }
    }
}

function mapShow(&$map)
{
    echo PHP_EOL;
    ksort($map);
    for ($y = 1; $y <= count($map); $y++) {
        ksort($map[$y]);
        end($map[$y]);
        $xEnd = key($map[$y]);
        for ($x = 1; $x <= $xEnd; $x++) {
            echo isset($map[$y][$x]) ? $map[$y][$x] : '.';
        }
        echo PHP_EOL;
    }
}

function d03p1($str, $isShow = false)
{
    $ids = d03prepare($str);

    $map = [];
    $ac = 0;
    foreach ($ids as $s) {
        list($id, $x_, $y_, $w, $h) = $s;

        for ($y = $y_; $y < $y_ + $h; $y++) {
            for ($x = $x_; $x < $x_ + $w; $x++) {
                $map[$y][$x] = isset($map[$y][$x]) ? 'x' : $id;
            }
        }
    }

    foreach ($map as $yk => $item) {
        foreach ($item as $xk => $v) {
            if ($v == 'x') {
                $ac++;
            }
        }
    }

    if ($isShow) {
        mapShow($map);
    }

    return $ac;
}

function d03p2($str)
{
    $ids = d03prepare($str);

    $map = [];
    foreach ($ids as $s) {
        list($id, $x_, $y_, $w, $h) = $s;

        for ($y = $y_; $y < $y_ + $h; $y++) {
            for ($x = $x_; $x < $x_ + $w; $x++) {
                $map[$y][$x] = isset($map[$y][$x]) ? 'x' : $id;
            }
        }
    }

    foreach ($ids as $s) {
        list($id, $x_, $y_, $w, $h) = $s;

        $ac = 0;
        for ($y = $y_; $y < $y_ + $h; $y++) {
            for ($x = $x_; $x < $x_ + $w; $x++) {
                if ($map[$y][$x] == 'x') {
                    $ac++;
                }
            }
        }

        if ($ac == 0) {
            return (int)$id;
        }
    }

    return 0;
}
