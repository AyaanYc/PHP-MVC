<?php
    // $num = 10;
    // $result = factorial_rec($num);
    // print "${num}! = $result <br>";

    // function factorial($val)
    // {
    //     $factorial = 1;
    //     for($i=2; $i<=$val; $i++)
    //     {
    //         $factorial *= $i;
    //     }
    //     return $factorial;
    // }

    // function factorial2($num)
    // {
    //     $result = 1;
    //     for($i=$num; $i>0; $i--)
    //     {
    //         $result *= $i; 
    //     }
    //     return $result;
    // }

    // function factorial_rec($num)
    // {
    //     if($num === 1) { return 1;}

    //     return $num * factorial_rec($num-1);
    // }


    // 절대값 만들기
    function my_abs($val)
    {
        // if($val<0)
        // {
        //   $val *= -1;
        // }
        // return $val;

        return $val < 0 ? -$val : $val;
       
    }
    $rand = rand(-20, 5);
    $result = my_abs($rand);
    print "int : " . $rand . "<br>";
    print "abs : " . my_abs($rand);
?> 
