<?php
    $num = array(10, 33, 12, 8, 1, 89, 11);
    $arr = $num;
    for($i=0; $i<count($num)-1; $i++)
    {
        for($z=0; $z<count($num)-1-$i; $z++)
        {
            if($arr[$i]>$num[$z+$i])
            {
                $temp = $arr[$i]
                $arr[$i] = $num[$z+$i];
                $num[$z+$i] = $temp;
            }
        }
    }
    
    foreach($arr as $val)
    {
        print $val . " ";
    }
?>

<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];
   
    print_r($arr);
    print "<br>";

    for($i=0; $i<count($arr)-1; $i++)
    {
        $idx = $i;
        for($z=$i+1; $z<count($arr); $z++)
        {
            if($arr[$idx] > $arr[$z]) 
            {
                $idx = $z;
            }
        }

        if($idx != $i)
        {
            $temp = $arr[$idx];
            $arr[$idx] = $arr[$i];
            $arr[$i] = $temp;
        }
    }

    print "<br>";
    print "<br>";
    print_r($arr);
?>