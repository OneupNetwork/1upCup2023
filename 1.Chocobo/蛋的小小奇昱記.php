<?php
    $aaaa = [];
    $total = (int)fgets(STDIN);
    for ($kk=0;$kk<$total;$kk++) {
        $flag = false;

        fgets(STDIN);
        for ($i=0;$i<8;$i++) {
            $str = trim(fgets(STDIN));
            if ($str == 'RRRRRRRR' && $flag == false) {
                $aaaa[] = 'R';
                $flag = true;
            }
        }

        if ($flag == false) {
            $aaaa[] = 'B';
        }
    }

    foreach ($aaaa as $kkk) {
        echo $kkk . PHP_EOL;
    }