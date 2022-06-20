<?php

    class Calc {
        function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

//Calc를 객체화 변수명은 c
//sum 메소드를 호출. 5, 10을 더한 값을 리턴받고 화면에 출력하시오.


    $c = new Calc;//메모리에 주소값을 올려주는 작업을해야됨
    $result = $c->sum(5, 10);
    print "result : " . $result . "<br>";

//static 메모리에 먼저 올라갔다.
    class StaticCalc {
        static function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    StaticCalc::sum(10, 11);
    print "result : " . $result . "<br>";