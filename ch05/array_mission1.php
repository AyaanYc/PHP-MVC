<?php
    $score_arr = array(100, 90, 33, 87, 65);

    print array_sum($score_arr)."<br>";
    print array_sum($score_arr)/count($score_arr) . "<br>";
?>
<?php
    /*
        합계: 375
        평균: 75
    */

    $score_arr = array(100, 90, 33, 87, 65);
    array_push($score_arr,0);
    $sum = 0;
    $len = count($score_arr);
    for($i=0; $i<$len; $i++) 
    {
        $sum += $score_arr[$i];
    }
    $avg = $sum / $len;

    print "합계: $sum <br>";
    print "평균: $avg <br>";
    
?>