<?php
    print "-----------------break----------------";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) {break;}
        print $i . "<br>";
    }

    print "-----------------continue----------------";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) {continue;}
        print $i . "<br>";
    }
    // continue는 스킵하고 계속, break는 반복문을 빠져나옴
?>