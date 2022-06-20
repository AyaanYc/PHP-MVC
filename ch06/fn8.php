<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border : 1px solid #000;
            padding : 5px;
            text-align : center;
        }
        table { 
            border-collapse : collapse;
        }
    </style>
</head>
<body>
    <table>
    <?php
    $val = rand(2, 9);

    print_table($val);

    function print_table($val)
    {
        print "구구단 표 : $val";
        $num = $val * $val;
        for($i=1; $i<=$val; $i++)
        {
            print "<tr>";
            for($z=1; $z<=$val; $z++)
            {
                print "<td>" . $num-- . "</td>";
            }
            print "</tr>";
        }

    }


?>
    </table>
</body>
</html>