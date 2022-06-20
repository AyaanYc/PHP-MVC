<?php
    include_once "db.php";
    $conn = get_conn();
    $s_query = "SELECT i_board, title, create_at FROM t_board7 ORDER BY i_board ASC";
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
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <div id="layout">
    <div id="login">
        <form action="login.php" mehtod="post">
            <div><input type="text" name="id" placeholder="id"></div>
            <div><input type="password" name="password" placeholder="password"></div>
            <input type="submit" value="로그인">
            <a href="sign_up.php"><button>회원가입</button></a>
        </form>
    </div>
    <div id="title"><h1>리스트</h1></div>
    <div id="main">
    <a href="write.php"><button>글작성</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>날짜</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>$i_board</td>";
                print "<td><a href=detail.php?i_board=$i_board>$title</a></td>";
                print "<td>$create_at</td>";
                print "</tr>";
            }
        ?>
    </table>
    </div>
    </div>
</body>
</html>