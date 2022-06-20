<?php
    $snum = 12;
    $enum = 11;
    print_num_from_to($snum, $enum);

    // [4,5,6,7,8,9,10]이렇게 출력하게 해주세요
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다."가 출력되게 해주세요

    function print_num_from_to($n1, $n2)
    {
        if($n1>$n2)
        {
            print"종료값이 더 작을 수 없습니다.";
            return;
        }
        
        
        for($i=$n1; $i<=$n2; $i++)
            {
                if($i>$n1)
                {print ", ";}
                print $i ;
            }
        
    }
// return을 만나면 함수가 종료
?>