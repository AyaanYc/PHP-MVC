<?php

    $arr = array();

    for($i=0; $i<5; $i++){
        $val = rand(1, 8);

        $is_duplication = 0; //0: 중복x, 1: 중복 o
        for($z=0; $z<count($arr); $z++) {
            if($arr[$z]===$val){
                $is_duplication = 1;
            }
        }
        if($is_duplication){
            $i--;
        } else {
            $arr[$i] = $val; //array_push($arr, $val);
        }
    }
    print_r($arr);


    // 중복되는게 있는지 체크하는for문한개
    // 넣어야되는 for문 한개