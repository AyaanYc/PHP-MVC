<?php
    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result 입니다.<br>";
    function sum_from_to($n1, $n2)
    {
        $val = 0;
        for ($i=$n1; $i<=$n2; $i++)
        {
            $val = $val+$i;
        }
        return $val;
    }

?>