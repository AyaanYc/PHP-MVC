<?php
//다양화를 위해 오버라이딩 사용 (객체마다 다른내용이 나오게끔 가능)
//접근했을때 없다면 부모의 오버라이딩함수 그부모도 없으면 부모의부모 한번에 부모접근도 가능
//구조를 만들면 부모의부모함수접근도가능
//같은 함수명을 써서 부모의 함수가 맘에 안들면 재정의사용 가능

class Animal {
    function crying() {
        print "동물이 운다. <br>";
    }
}

class Dog extends Animal {
    function crying() {
        print "강아지가 멍멍. <br>";
    }
    
}

class Chiwawa extends Dog {
    parent::grandFatherCrying();
    // function crying() {
    //     print "치와와가 왕왕. <br>";
    // }
}

class Cat extends Animal {
    function crying() {
        print "고양이가 야옹~<br>";
    }
}

class Human {
    function speak() {
        print "사람이 말하다!!";
    }
}

function doCry($ani) {
    if(method_exists($ani, "crying")) {
        $ani->crying();
    } else {
        print "crying 메소드 없음!";
    }
}

doCry(new chiwawa);
doCry(new Animal);
doCry(new Cat);
doCry(new Dog);
doCry(new Human);