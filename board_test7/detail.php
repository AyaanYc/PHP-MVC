<?php
    include_once "db.php";
    $conn = get_conn();
    $i_board = $_GET['i_board'];
    $s_query = "SELECT * FROM t_board7 WHERE i_board = $i_board";
    $result = mysqli_query($conn, $s_query);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
        $mod_at = $row['mod_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세부내용</title>
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
    <div id="title"><h1>세부내용</h1></div>
    <div id="main">
    <a href="list.php"><button>리스트</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>글수정</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>글삭제</button></a>
    <div>제목: <?=$title?></div>
    <div>내용: <?=$ctnt?></div>
    <div>작성일시: <?=$create_at?></div>
    <div>수정일시: <?=$mod_at?></div>
    </div>
</div>
</body>
</html>