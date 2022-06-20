<?php

    $arr = array(); // 이 배열에 최대로 넣을 수 있는 값은 5개까지

    for($i=0; $i<5; ) {
        $val = rand(1, 8);

        for($z=0; $z<count($arr); $z++) {
            if($arr[$z] === $val) {
                $i--;
                goto first_for;
            }
        }
        array_push($arr, $val);
        
        first_for:
        $i++;
    }
    print_r($arr);