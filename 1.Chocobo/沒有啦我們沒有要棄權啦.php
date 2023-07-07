<?php

    $dataSetLength = (int) fgets(STDIN);
    for ($dataSet = 0; $dataSet < $dataSetLength; $dataSet++) {
        fgets(STDIN);
        $grid = [];
        for ($i = 0; $i < 8; $i++) {
            $grid[$i] = str_split(trim(fgets(STDIN)));
        }
        for ($i = 0; $i < 8; $i++) {
            $counter = count(array_unique($grid[$i]));
            if ($counter == 1 && $grid[$i][0] == 'R') {
                echo($grid[$i][0] . PHP_EOL);
                break;
            }
        }
        for ($i = 0; $i < 8; $i++) {
            $temp = [];
            for ($j = 0; $j < 8; $j++) {
                $temp[] = $grid[$j][$i];
            }
            $counter = count(array_unique($temp));
            if ($counter == 1 && $temp[0] == 'B') {
                echo($temp[0] . PHP_EOL);
                break;
            }
        }
    }
