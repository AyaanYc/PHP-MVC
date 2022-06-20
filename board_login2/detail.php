<?php
    include_once "db/db_board.php";
    $i_board = $_GET['i_board'];
    $param = ['i_board' => $i_board];
    $item = sel_board($param);
    session_start();
    if(isset($_SESSION['login_user'])){
        $login_user = $_SESSION['login_user'];
    }
    $pre = pre_board($param);
    $next = next_board($param);
    $result = views($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>세부내용</h1>
    <a href="list.php"><button>리스트</button></a>
    <?php if(isset($login_user) && $login_user['i_user'] === $item['i_user']) { ?>
        <div>
        <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
        <button onclick="isDel();">삭제</button>
        </div>
    <?php } ?>

    <div>글번호: <?=$item['i_board']?></div>
    <div>제목: <?=$item['title']?></div>
    <div>내용: <?=$item['ctnt']?></div>
    <div>글쓴이: <?=$item['nm']?></div>
    <div>작성일시: <?=$item['created_at']?></div>
    <div>수정일시: <?=$item['updated_at']?></div>
    <?php
    if($pre != 0){
        print "<a href=detail.php?i_board=$pre><button>이전글</button></a>";
    }
    if($next != 0){
        print "<a href=detail.php?i_board=$next><button>다음글</button></a>";
    }
    ?>
</body>
<script>
    function isDel(){
        if(confirm("삭제하시겠습니까?")){
            location.href = "del.php?i_board=<?=$i_board?>";
        }
    }
</script>
</html>