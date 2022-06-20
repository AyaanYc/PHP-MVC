<?php
    // 사람별 점수 총점을 구하시오
    $scores = array(
        //국, 영, 수
        array(100, 100, 100),   // 영수
        array(90, 80, 70),      // 순자
        array(55, 65, 75, 55),      // 영철
        array(55, 65, 15, 58),      // 영철
    );

    $names = array("영수", "순자", "영철", "가영");
    $each_sum = array(0, 0, 0);

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_sum[$i] += $scores[$i][$z];
        }
    }

    for($i=0; $i<count($scores); $i++)
    {
        print $names[$i] . ":" . $each_sum[$i] . "<br>";
    }
?>