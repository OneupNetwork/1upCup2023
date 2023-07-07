<?php
    $inC = trim(fgets(STDIN));

    for ($i = 0; $i < $inC; $i++) {
        $inNouse = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));
        $in[$i][] = trim(fgets(STDIN));

        $res = 'B';
        for ($j = 0; $j < 8; $j++) {
            if ($in[$i][$j] == 'RRRRRRRR') {
                $res = 'R';
                break;
            }
        }
        echo $res . PHP_EOL;
    }

