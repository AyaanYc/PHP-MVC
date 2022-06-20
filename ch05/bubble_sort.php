<?php
    $num = array(10, 33, 12, 8, 1, 89);
    $count = 6;
    echo "정렬되기 전 : ";

    foreach ($num as $arr)
    {
        print $arr . " ";
    }

    echo "<br/>";

    for($i = $count - 1; $i > 0; $i--) {    // $i는 4 ~ 0으로 1씩 감소
        
        for($j = 0; $j < $i; $j++) {        // $j는 0 ~ $i로 1씩 증가
            
            if($num[$j] > $num[$j + 1]) {    // 앞에 위치한 숫자가 더 크면 위치 바꿈
                $tmp = $num[$j];                // 앞의 데이터를 $tmp에 잠시 저장
                $num[$j] = $num[$j + 1];      // 뒤의 데이터를 앞의 배열 원소에 저장
                $num[$j + 1] =$tmp;            // $tmp를 뒤의 배열 원소에 저장
            }
        }
    }

    echo "오름차순 정렬(버블정렬) : ";
    foreach ($num as $arr)
    {
        print $arr . " " ;
    }
?>