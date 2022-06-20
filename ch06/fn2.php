<?php
$num = rand(1, 10);

print_odd_even($num);

// function print_odd_even($n1)
// {
//     if($n1%2===0)
//     {
//         print "숫자 $n1(는)은 짝수입니다.";
//     }
//     else
//     {
//         print "숫자 $n1(는)은 홀수입니다.";
//     }
// }

function print_odd_even($num)
{
    $result = $num % 2 === 0 ? "짝" : "홀";
    print "숫자 $num(는)은 ${result}수 입니다.";
}
?>