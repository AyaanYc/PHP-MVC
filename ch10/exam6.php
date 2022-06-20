<?php
    //file_get_contents를 활용한 풀이

    // $filep = file_get_contents("exam6.txt");

    // if(!$filep) {
    //      die("파일을 열수 없습니다.");
    // }
    // print "파일을 열었습니다.<br>";
 
    // $str = strtoupper($filep);
    // print $str . "<br>";
     
    // $filep = fopen("exam6_capital.txt", "w");
    // fputs($filep, $str);       
    // fclose($filep);

    //풀이2
    $fileR = fopen("exam6.txt", "r");

    if(!$fileR) {
        die("파일을 열수 없습니다.");
    }
    print "파일을 열었습니다.<br>";
    
    $str = "";
    while($line = fgets($fileR)) {
        print $line . "<br>";
        $str .= strtoupper($line);
    }
    
    $fileW = fopen("exam6_capital.txt", "w");
    fputs($fileW, $str);

    fclose($fileR);
    fclose($fileW);