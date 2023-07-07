<?php
$num = trim(fgets(STDIN)); //測資的個數

for($t = 0; $t < $num; $t++) {
    $num2 = trim(fgets(STDIN));
    $arr = explode(' ', trim(fgets(STDIN)));

    $start = -1;
    $end = -1;
    $c = 0;
    $total = 0;

    foreach($arr as $index => $value){
        if($value > 0) {
            $total += $value;
            if($start == -1){
                continue;
            } else {
                $end = $index -1;
                $c++;
                $start = -1;
                continue;
            }
        }

        if($value < 0) {
            $total += (-1*$value);
        }

        if($value < 0 && $index == count($arr) -1){
            $c++;
            break;
        }

        if($start != -1 && $index == count($arr) -1) {
            $c++;
            break;
        }

        if($value < 0 && $start == -1) {
            $start = $index;
            continue;
        }
    }

    echo $total;
    echo " ";
    echo $c;
    echo "\n";
}