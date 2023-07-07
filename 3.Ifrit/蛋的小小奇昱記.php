<?php
    $rows = (int)fgets(STDIN);
    $list = [];

    for ($i=0;$i<$rows;$i++) {
        $r1 = explode(' ', trim(fgets(STDIN)));
        $r2 = explode(' ', trim(fgets(STDIN)));

        $x = $r1[0];
        $y = $r1[1];
        $a = $r2[0];
        $b = $r2[1];

        $a1 = abs($x - $y) * $a;
        $a2 = min($x, $y) * $b;
        $a3 = ($x + $y) * $a;

        $list[] = min($a1 + $a2, $a3);
    }

    echo join(PHP_EOL, $list) . PHP_EOL;