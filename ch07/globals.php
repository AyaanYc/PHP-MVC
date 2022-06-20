<?php
print "-- 글로벌 상수 -- <br>";
    foreach($GLOBALS as $key => $var)
    {
        print $key . " : ";
        print_r($var);
        print "<br>";
    }
?>