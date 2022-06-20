 <!-- <?php
    print "[";
    for($i=1; $i < 7 ; $i++)
    {
        print "$i,";
    }
    
    print $i . "]";
        
?>  -->

<?php
    $end_val = 10;
    print "[";
    for ($i=1; $i <= $end_val; $i++ )
    {
        print $i;

        if($i < $end_val)
        {print ",";}
    }
    print "]";
    
    echo "<br>";

    print "[";
    for ($i=1; $i <= $end_val; $i++)
    {
        if($i>1) { print ",";}
        print $i;
        
    }
    print "]";
?>