<?php
    $score = array(1, 2, 3, 4);
    $score_2 = $score;

    print_r($score);
    print "<br>";
    print_r($score_2);
    print "<br>";

    $score_2[0] = 100;

    print_r($score);
    print "<br>";
    print_r($score_2);
    print "<br>";
?>