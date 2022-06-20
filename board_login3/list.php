<?php
    include_once "db/db_board.php";
    session_start();
    $login_user = $_SESSION['login_user'];
    $list = sel_board_list();

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
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <thead>
            <tr>
                <th>글번호</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>작성일시</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($list as $item){
                    echo "<tr>";
                    echo "<td>".$item['i_board']."</td>";
                    echo "<td><a href=detail.php?i_board=".$item['i_board'].">".$item['title']."</a></td>";
                    echo "<td>".$item['nm']."</td>";
                    echo "<td>".$item['created_at']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>