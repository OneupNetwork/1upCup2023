<?php
    $d = trim(fgets(STDIN));

    for ($i = 0; $i < $d; $i++) {
        $c = 0;
        $sum = 0;
        $t = [];
        $len = trim(fgets(STDIN));
        $elem = explode(" ", trim(fgets(STDIN)));
        foreach ($elem as $v) {
            if ($v == 0) {
                continue;
            }
            if ((int)$v < 0) {
                $t[] = $v;
            } else {
                if (!empty($t)) {
                    $sum += abs(array_sum($t));
                    $c++;
                    $t = [];
                }
                $sum += $v;
            }
        }
        if (!empty($t)) {
            $sum += abs(array_sum($t));
            $t = [];
            $c++;
        }
        echo $sum . ' ' . $c . PHP_EOL;
    }