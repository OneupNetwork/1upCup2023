<?php

$totalSet = (int)  fgets(STDIN);

for ($i = 0; $i < $totalSet; ++$i) {
    list($x, $y) = explode(" ", trim(fgets(STDIN)));
    list($a, $b) = explode(" ", trim(fgets(STDIN)));

    if ($x > $y) {
        cost($x, $y, $a, $b);
    } else {
        cost($y, $x, $a, $b);
    }
}

function cost($more, $less, $a, $b) {
    $answer1 = $less * $b + ($more - $less) * $a;
    $answer2 = ($more + $less) * $a;
    echo min($answer1, $answer2) . PHP_EOL;
}