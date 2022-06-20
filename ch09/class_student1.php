<?php
    // Access Modifier
    // 접근제어 지시자
    // 접근지시어
    // 접근제어자
    // java: private default protected public
    class Student {
        public $studentId;
        public $studentName;

        function __construct() {
            print "construct!!!<br>";
        }

        public function printStudent($id, $name) {
            print "ID : {$id}<br>";
            print "Name : {$name}<br>";
        }
    }

    function printStudent($id, $name) {
        print "dddd : {$id}, {$name}";
    }

    $obj = new Student;//호출안해도 생성자는 실행됨(consotruct)
    $obj->studentId = 20171234;
    $obj->studentName = "Alice";
    $obj->printStudent($obj->studentId, $obj->studentName);//메소드호출

    printStudent("kkkk", "gggg");//함수호출

    