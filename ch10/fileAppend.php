<?php
    $filep = fopen("../lorem.txt", "a");//파일내용뒤에 내용추가 파일이 없다면 추가한다.

    if(!$filep) {
        die("파일을 열수 없습니다.");
    }
    print "파일을 열었습니다.<br>";

    fputs($filep, "\nROMEO : ㅋㅋㅋㅋsdfㅋㅋㅋㅋㅋㅋㅋ");

    $filep = fopen("../lorem.txt", "r");

    while($line = fgets($filep, 1024)) {
        print $line . "<br>";
    }
    
    fclose($filep);

