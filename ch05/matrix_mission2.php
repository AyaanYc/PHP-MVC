<?php
// 국어 합계, 평균  영어 합계,평균   수학 합계,평균
     $scores = array(
        //국, 영, 수
        array(100, 100, 100),   // 영수
        array(90, 80, 70),      // 순자
        array(55, 65, 75),       // 영철
        array(90, 88, 55),       // 영철
    );

    // $scoers[0][0]
    // $scoers[1][0]
    // $scoers[2][0]
    
    // $scoers[0][1]
    // $scoers[1][1]
    // $scoers[2][1]

    // $scoers[0][2]
    // $scoers[1][2]
    // $scoers[2][2]

    $sum = array(0, 0, 0);
    $class = array("국어", "영어", "수학");

    for($i=0; $i<count($class); $i++)
    {
        for($z=0; $z<count($scores); $z++)
        {
            $sum[$i] += $scores[$z][$i];
        }
    }

    for($i=0; $i<count($class); $i++)
    {
        print $class[$i] . "<br>";
        print "합계 : " . $sum[$i] . ", 평균 : " . $sum[$i]/count($scores) . "<br><br>" ;
    }
    
?>