<?php
    // 사람별 점수 총점을 구하시오
    $score = array(
        //국, 영, 수
        array(100, 100, 100),   // 영수
        array(90, 80, 70),      // 순자
        array(55, 65, 75),      // 영철
    );

    $names = array("영수", "순자", "영철");
    $each_scores = array(0, 0, 0);

    for($i=0; $i<count($score); $i++)
    {
        for($z=0; $z<count($score[$i]); $z++)
        {
            $each_scores[$i] += $score[$i][$z];
        }
    }

    for($i=0; $i<count($score); $i++)
    {
        print $names[$i] . ":" . $each_scores[$i];
        print "<br>";
    }
?>