<?php  
    //은닉화된 멤버필드에 값을 넣을때 사용하는게 생성자&메소드
    //private멤버필드를 빼내는 방법은 getter밖에없음
    //setter메소드가 없으면 값을 변경할 수 없음
    //생성자__construct는 매개변수가 정해져있어서 유동적이지못함
    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name="orange", $color=null, $price=null) {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        public function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br><br>";
        }
    }

    $apple = new Fruit("Apple", "red", 1000 );
    $banana = new Fruit("Banana", "yellow", 500);

    $apple->print_fruit();
    $banana->print_fruit();
