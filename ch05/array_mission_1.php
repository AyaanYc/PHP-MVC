<?php
    $arr = [4, 9, 10, 22, 100, 45, 99, 11];

    for($i=count($arr)-1; $i>=0; $i--) {
        print $arr[$i] . "<br>";
    }

    print "---------------<br>";

    $len = count($arr);
    for($i=1; $i<=$len; $i++) {
        print $arr[$len - $i] . "<br>";
    }

    $len = count($arr);
    for($i=1; $i<=$len; $i++){
        $d = $len - $i; 
        print $arr[$d] . "<br>";
    }
    //for문에서 내용부분에 $i는 건들면안됨 새로운변수 추가는 가능

    