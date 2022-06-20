<?php
//객체마다 다른값을 가지고 싶다면 static을 주면안된다.
    class Computer {
        public static $brand;//메모리에 올라감
        public $price;//아직 메모리에 올라가지않음

        function __construct(){
            self::$brand = "SAMSUNG";
        }

        function myPrint() {
            print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다.<br>";//self=Computer
        }

        static function setBrand($brand){
            self::$brand = $brand;
        }

        static function myStaticPrint() {
            //static 함수는 파라미터로 들어온것만 사용하던지 멤버필드에 static이 붙은것만 사용가능 
            print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 입니다.<br>";
        }
    }
    //객체안에 $brand는 빠져있고 다만 참조를 한다.
    Computer::$brand = "LG";

    $c = new Computer;
    $c->price = 10000;

    $c2 = new Computer;
    $c2->price = 20000;

    $c->myPrint();
    $c2->myPrint();

    
    Computer::setBrand("LG");
    $c->myPrint();
    $c2->myPrint();
    $c3 = new Computer;

    //static 함수는 파라미터로 들어온것만 사용하던지 멤버필드에 static이 붙은것만 사용가능 
    $c3->myStaticPrint();