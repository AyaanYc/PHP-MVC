<?php
//이미지 업로드할때 사용
    print __FILE__ . "<br>";
    print __LINE__ . "<br>";
    print __LINE__ . "<br>";
    print "PHP VERSION : " . PHP_VERSION . "<br>";
    print "OS : " . PHP_OS . "<br>";

    $GLOBALS["foo"] = 10;
    $GLOBALS["foo1"] = 11;

    print "-- 글로벌 상수 -- <br>";
    foreach($GLOBALS as $key => $var)
    {
        print $key . " : ";
        print_r($var);
        print "<br>";
    }

    $arr = array(
        "name" => "홍길동",
        "age" => 20,
        "height" => 160.6
    );
    foreach($arr as $key => $var)
    {
        print $key . " : ";
        print_r ($var);
        print "<br>";
    }
    phpinfo();
?>