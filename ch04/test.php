<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border: 1px solid #000;
        }
        table {border-collapse: collapse;}
    </style>
</head>
<body>
    <table>
    <?php
        $val = rand(3,9);
        $num = 1;
        for($i=0; $i<$val; $i++)
        {
            print "<tr>";
            for($z=0; $z<$val; $z++)
            {
                print "<td>".$num++."</td>";
            }
            print "</tr>";
        }
    ?>
    </table>
</body>
</html>