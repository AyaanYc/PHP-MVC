<?php error_reporting(E_ALL); ini_set("display_errors", 1); ?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $str = "PHP 웨프로그래밍";

    $str = "PHP 웹프로그래밍";

    $str = "PHP 웹프로그래밍";
    print "str[0] : " . $str[0] . "<br>";
    print "str[4] : " . $str[4] . $str[5] . $str[6] . "<br>";
    print $str . "<br>";

    $str1 = "http://www.php.edu/testurl.html?name=kim&age=28";
    $str2 = parse_url($str1);
    print "HOST : " . $str2["host"] . "<br>";
    //var_dump($str2);

    //error_log("test", 3, "C:\Apache24\htdocs\ch08\err.log")

    parse_str($str2["query"], $output);
    print "이름 : ";
    print $output["name"];
    print "<br>";
    $sitename = "php웹이즈프리";
    echo substr($sitename, 0, 6) . "<br>";
    echo mb_substr($sitename, 0, 1) . "<br>";
    echo mb_strlen($sitename) . "<br>";
    printf("나이 %02d, 키 %.2f <br>", 8, 173.1212);

    $date = "2017 1 13";
    sscanf($date, "%d %d %d", $year, $mon, $day);
    print "PATH : " . $str2["path"] . "<br>";//경로
    print "SCHEME : " . $str2["scheme"] . "<br>";

    error_log("test", 3, "./err.log");
    var_dump($str2);
    print "<br>";

    //error_log("test", 3, "C:\Apache24\htdocs\ch08\err.log")

    print "query : " . $str2["query"] . "<br>";

    parse_str($str2["query"], $output);
    print "이름 : ";
    print $output["name"];
    print "나이 : ";
    print $output["age"];
    print "<br>";
    $sitename = "php웹이즈프리";
    echo substr($sitename, 0, 6) . "<br>";// 모음,자음 하나당 갯수계산
    echo mb_substr($sitename, 0, 4) . "<br>";// 한글 한 자당 한개씩 계산
    echo mb_strlen($sitename) . "<br>";
    printf("나이 %02d, 키 %.2f <br>", 8, 173.1212);
    // %02는 숫자까지합쳐서 2자리차지하는데 앞에 0하나, %03은 008이됨
    //%.2f는 소숫점 몇자리까지 나오게할지 
    //%10s 는 왼쪽에 공백10개 -10은 오른쪽에10개

    $date = "2017 1 13";// 2010/02/13, 2010_4_31, 섞어서 사용가능
    sscanf($date, "%d %d %d", $year, $mon, $day); //구분자를 통해 문자열을 잘라서 나눠서 담아줌 띄어쓰기, _, / 가능

    print $year . "<br>";
    print $mon . "<br>";
    print $day . "<br>";

    $str4 = "나이는 12살입니다.";
    sscanf($str4, "%s %d %s", $strAge, $decAge, $strAge2);
    sscanf($str4, "%s %d %s", $strAge, $decAge, $strAge2);// 타입이 바뀌는 걸로도 구분이 가능함 %d는 데시멀(정수)
    sscanf($str4, "%s %d %s", $strAge, $decAge, $strAge2);// 타입이 바뀌는 걸로도 구분이 가능함 %d는 데시멀(정수)
    print $strAge . "<br>";
    print $decAge . "<br>";
    print $strAge2 . "<br>";
?>    
</body>
</html>