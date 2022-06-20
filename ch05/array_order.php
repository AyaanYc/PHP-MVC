<?php
    $arr_age = array(
        "Pater" => 35,
        "Ben" => 37,
        "joe" => 43,
        "John" => 24,
    );

    // 값 정렬
    // sort(오름차순), resort(내림차순)

    $copy_arr_1 = $arr_age;
    print "copy : ";
    sort($copy_arr_1);
    print_r($copy_arr_1);
    print "<br>";

    rsort($copy_arr_1);

    print "orign : ";
    print_r($arr_age);
    print "<br>";
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>-------------<br>";

    $copy_arr_2 = $arr_age;
    print "copy2 :";
    print_r($copy_arr_2);
    print "<br>";

    ksort($copy_arr_2);

    print "copy2:";
    print_r($copy_arr_2);
    print "<br>";
?>
