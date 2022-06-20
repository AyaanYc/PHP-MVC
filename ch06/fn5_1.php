<?php
    $snum = 5;
    $enum = 11;
    print_num_from_to($snum, $enum);

    // [4,5,6,7,8,9,10]이렇게 출력하게 해주세요
    // 만약 enum값이 더 작으면 5,4, 3, 2, 1 가 출력되게 해주세요

    // function print_num_from_to($n1, $n2)
    // {
    //     print "[";
    //     if($n1<$n2)
    //     {
    //         for($i=$n1; $i<=$n2; $i++)
    //         {
    //             if($i>$n1)
    //             {print ", ";}
    //             print $i;
    //         }
    //     }
    //     else if($n1>$n2)
    //     {
    //         for($i=$n1; $i>=$n2; $i--)
    //         {
    //             if($i != $n1)
    //             {print ", ";}
    //             print $i;
                          
    //         }
    //     }
    //     print "]";
    // }

    function print_num_from_to($snum, $enum)
    {
        print "[";
        for($i=$snum; $snum<$enum ? $i<=$enum : $i>=$enum; $snum<$enum ? $i++ : $i--)
        {
            if($i != $snum)
            {print ", ";}
            print $i;
        }
        print "]";
    }
// return을 만나면 함수가 종료
?>