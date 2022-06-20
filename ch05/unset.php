<?php
    if(isset($name)) {
    print "name is ok!!";
    }

    $name = "HongGilDong";
    if(isset($name)) {
        print "name is ok!!";
    }
    print $name . "<br>";

    unset($name);
    print $name . "<br>";

    print "The End";

    // isset은 값이 있는지 없는지 boolean으로확인, unset은 배열값을 지움
?>