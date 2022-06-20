<?php
    $num = array(10, 33, 12, 8, 1, 89);
    $count = count($num);

    for($i = $count - 1; $i > 0; $i--)
    {
        for($z=0; $z<$i; $z++)
        {
            if($num[$z] > $num[$z+1])
            {
            $temp = $num[$z];
            $num[$z] = $num[$z+1];
            $num[$z+1] = $temp;
            }
        }
    }

    foreach($num as $arr)
    {
        print $arr . " ";
    }
?>