<?php

//멤버필드에는 유일하게 상수는 public
//순서대로처리하기위해 겟터셋터필요 제약도 넣을수있음
/*  OOP 설계 원칙상 캡슐화
    멤버변수 보호
    변수의 타입체크 또는 유효성 체크
    디버깅시 어떤 놈의 멤버변수에 접근하는지 브레이크 포인트를 찍을 수 있는 곳이 생김
    실제 멤버변수가 없지만 있는것처럼 위장 가능 */
//private 멤버필드에 값 넣을 수 있는 2가지 방법 : 1) 셋터 , 2) 생성자함수
//private 멤버필드에 값 뺄 수 있는 1가지 방법 : 1) 겟터
    class Student {
        private $studentId;
        private $studentName;
        private $student;
        const ADDR = "대구";

        //getters
        public function getStudentId() {
            return $this->studentId;
        }
        public function getStudentName() {
            return $this->studentName;
        }

        //setters
        public function setStudentId($studentId) {
            $this->studentId = $studentId;
            return $this;
        }
        public function setStudentName($studentName) {
            $this->studentName = $studentName;
            return $this;
        }

        public function printStudent() {
            print "ID : {$this->studentId}<br>";
            print "Name : {$this->studentName}<br>";
        }

        /**
         * Get the value of student
         */ 
        public function getStudent()
        {
                return $this->student;
        }
    }

    $obj = new Student();
    //print $obj->setStudentId(1122)->getStudentId() . "<br>";      
    print "1번째 : " . $obj->setStudentId(1122)->setStudentName('길동')->getStudentId() . "<br>";

    $obj2 = new Student;
    print $obj2->setStudentId(8888)->getStudentId() . "<br>";  
    print "2번째 : " . $obj->getStudentId() . "<br>";

