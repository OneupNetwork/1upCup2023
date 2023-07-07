<?php

$totalSet = (int)  fgets(STDIN);

for ($i = 0; $i < $totalSet; ++$i) {

    $totalRows = (int)trim(fgets(STDIN));

    $sum = [];

    for ($j = 0; $j < $totalRows; ++$j) {
        $data = explode(" ", trim(fgets(STDIN)));
        foreach ($data as $l => $v) {
            @$sum[$v] += $l;
        }
    }
    asort($sum);
    echo implode(" ", array_keys($sum)) . PHP_EOL;
}