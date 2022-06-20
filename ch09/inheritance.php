<?php
//extends는 상속받아서 참조해서 사용한다. private빼고 public 은물론 protected까지 사용가능
//부모의 내용이 마음에 안들어서 내용을 바꾸는것 오버라이딩
//php파일 하나에 class하나가 원칙
class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }

    class Student extends People {
        private $studentId;

        function __construct($name, $age, $studentId) {
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }

        function printStudent() {
            print "- Student - <br>";
            $this->printPeople();
            // parent::printPeople();
            print "Id : {$this->studentId}<br>";
        }

        function printPeople() {
            print "Student에 있는 print People<br>";
        }
    }

    $stu1 = new Student("홍길동", 21, 1010);
    $stu1->printPeople();
    print "---------------------<br>";
    $stu1->printStudent();