<?php
    function print_sum(...$vals)
    {
        // $sum = 0;
        // for($i=0; $i<count($vals); $i++)
        // {
        //     $sum += $vals[$i];
        // }
        // print "sum : $sum <br>";
        foreach($vals as $val)
        {
            $sum += $val;
        }
        print "sum : $sum <br>";
       
    }
    print_sum(1, 2);
    print_sum(1, 2, 3);
    print_sum(1, 2, 3, 4);


?>