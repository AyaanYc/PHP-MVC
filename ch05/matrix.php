<?php
    $matrix = array(
        array(1, 2, 3, 0),
        array(4, 5, 6, 0),
        array(7, 8, 9, 0, 5)
    );

    print_r($matrix);
    print "<br><br>";

    print $matrix[2][3] . "<br>";

    $child = $matrix[1]; //깊은복사 똑같은거 한개를 만들어냄
    array_push($child, 10, 5);


    print_r ($child);
    print "<br><br>";

    print "matrix count : " . count($matrix) . "<br>";
    print "matrix count[0] : " . count($matrix[0]) . "<br>";
    print "matrix count[1] : " . count($matrix[1]) . "<br>";
    print "matrix count[2] : " . count($matrix[2]) . "<br>";
    print "matrix count[2] : " . count($child) . "<br>";
?>
<!--  얕은복사는 주소만 복사하기 때문에 값이 변동되면 같이변동됨 -->