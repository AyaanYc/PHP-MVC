<?php
        $star = rand(3, 10);

        print_star_triangle($star);
    
        function print_star_triangle($star)
        {
            print "값 : $star <br>";
            for($i=1; $i<=$star; $i++)
            {
                for($z=0; $z<$i; $z++)
                {
                    print "*" ;
                }
                print "<br>";
            }
        }

        // function print_star_triangle($star)
        // {
        //     print "값 : $star <br>";
        //     $symbol = "";
        //     for($i=0; $i<$star; $i++)
        //     {
        //         $symbol = "*" . "$symbol";
        //         print $symbol . "<br>";
        //     }
        // }

  
?>