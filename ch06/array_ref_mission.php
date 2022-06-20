<?php
    function add_array(&$n1, $n2)
    {
        for($i=0; $i<count($n1); $i++)
        {
            $n1[$i] += $n2;
        }
    }


    $arr = [10, 20, 30, 40, 50];
    add_array($arr, 5);
    print_r($arr);


    // $arr = [10, 20, 30, 40, 50];
    // plus_array($arr, 7);
    // print_r($arr);

    // function plus_array(&$arr, $val)
    // {
    //     foreach($arr as $k => $v)
    //     {
    //         $arr[$k] = $v + $val;
    //     }
    // }
    ?>