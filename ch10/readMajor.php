<?php
    $data = file("./major.txt");

    print_r($data);

    foreach($data as $line) {
        $str = explode(" ", $line);
        print "Name: {$str[0]}, Major: {$str[1]} <br>";
    }