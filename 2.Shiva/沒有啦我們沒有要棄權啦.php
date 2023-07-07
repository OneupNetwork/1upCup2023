<?php

    $dataSetLength = (int) fgets(STDIN);
    for ($dataSet = 0; $dataSet < $dataSetLength; $dataSet++) {
        fgets(STDIN);
        $total = 0;
        $move = 0;
        $numArray = explode(' ', trim(fgets(STDIN)));
        for ($i = 0; $i < count($numArray); $i++) {
            if ($numArray[$i] < 0) {
                $move++;
                for ($j = $i; $j < count($numArray); $j++) {
                    if ($numArray[$j] <= 0) {
                        $numArray[$j] = -$numArray[$j];
                    } else {
                        break;
                    }
                }
            }
            $total = $total + $numArray[$i];
        }
        echo($total . ' ' . $move . PHP_EOL);
    }
