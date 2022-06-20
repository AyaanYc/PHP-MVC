<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th {
            border : 1px solid #000;
            padding : 5px;
        }
        table {border-collapse: collapse;}
    </style>
</head>
<body>
    <table>
<?php
    /*

    */
    $array = array(
        "Hong" => 182.2,
        "Hwang" => 180.4,
        "Kim" => 176.3,
        "Park" => 174.1
    );
    print "<th>이름</th><th>키</th>";

   foreach($array as $name => $tall)
    {
        print "<tr>";
        print "<td>$name</td>";
        print "<td>$tall</td>";
        print "</tr>";
    }
?>
</table>
</body>
</html>
