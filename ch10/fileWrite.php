<?php
    $filep = fopen("../romeo.txt", "w");//file 전체내용 update 파일이 없다면 파일 추가도가능

    if(!$filep) {
        die("파일을 열수 없습니다.");
    }
    print "파일을 열었습니다.<br>";

    fputs($filep, "ROMEO : I take thee at thy word");
