<?php
    include_once "db.php";
    $conn = get_conn();

    $s_query = 
    "SELECT i_num, title, create_at, mod_at
     FROM t_board2
    ";
    $result = mysqli_query($conn, $s_query);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write.php"><button>글작성</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
            <th>수정일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $i_num = $row['i_num'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                $mod_at = $row['mod_at'];
                print "<tr>";
                print "<td>$i_num</td>";
                print "<td><a href=detail.php?i_num='$i_num'>$title</a></td>";
                print "<td>$create_at</td>";
                print "<td>$mod_at</td>";
                print "</tr>";
            }
        ?>
    </table>
    
</body>
</html>