<?php
    $dan = rand(2, 9);

    // print_gugudan($dan);

    // function print_gugudan($n1)
    // {
    //     for($i=$n1; $i<=$n1; $i++)
    //     {
    //         for($z=1; $z<=9; $z++)
    //         {
    //             print "$i * $z = " . $i*$z . "<br>" ;
    //         }
    //     }
    //     return;
    // }

    function print_gugudan($dan)
    {
        for($z=1; $z<10; $z++)
        {
            print "$dan * $z = " . $dan*$z . "<br>";
        }
    }

    print_gugudan_from_to(2,6);
    function print_gugudan_from_to($n1, $n2)
    {
        for($dan=$n1; $dan<=$n2; $dan++)
        {
            print_gugudan($dan);
            print "<br>";
        }
    }
?>