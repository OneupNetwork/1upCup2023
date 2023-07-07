<?php
$num = trim(fgets(STDIN)); //測資的個數
//forloop 測資

$answer = [];

for($t = 0; $t < $num; $t++) {
    $answer = '';
    $space = trim(fgets(STDIN));

    $arrX = [];
    $total = [];

    for($i = 0; $i < 8; $i++) {
        $value = trim(fgets(STDIN));
        $arrX = str_split($value);
        $total[] = $arrX;
    }

    foreach($total as $i => $arrX){
        foreach($arrX as $u=>$value){
            if($value == 'B' || $value == '.') {
                break;
            }
            if($u == 7){
                $answer = 'R';
                break;
            }
        }
    }
    if($answer == '') {
        $answer = 'B';
        /*$yyy = [];
        for($z = 0; $z < 8; $z++){
            $arrY = [];
            foreach($total as $u => $arrX){
                $arrY[] = $arrX[$u];
            }
            $yyy[] = $arrY;
        }

        foreach($yyy as $x){
            foreach($arrY as $u => $value){
                if($value == 'R' || $value == '.') {
                    continue;
                }
                if($u == 7){
                    $answer = $value;
                    break;
                }
            }
        }*/
    }
    echo $answer;
    echo "\n";
}
