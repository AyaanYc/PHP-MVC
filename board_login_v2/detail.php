<?php
    include_once "db/db_board.php";
    //세션
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }
    $i_board = $_GET["i_board"];
    //검색
    $search_txt = "";
    if(isset($_GET["search_txt"])) {
        $search_txt = $_GET["search_txt"];
    }
    // 매개변수
    $param = [
        "i_board" => $i_board,
        "search_txt" => $search_txt
    ];
    $item = sel_board($param);
    $page = $_GET["page"];
    $pre_page = pre_page($param);
    $next_page = next_page($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div><a href="list.php?page=<?=$page?>&search_txt=<?=$search_txt?>">리스트</a></div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
        <div>
            <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
            <button onclick="isDel();">삭제</button>
        </div>
    <?php } ?>
    <div>제목 : <?php $result = str_replace($search_txt, "<mark>$search_txt</mark>", $item['title'])?><?=$result?></div>
    <div>글쓴이 : <?=$item["nm"]?></div>
    <div>등록일시 : <?=$item["created_at"]?></div>
    <div><?=$item["ctnt"]?></div>
    <div>
        <a href="detail.php?i_board=<?=$pre_page["i_board"]?>&page=<?=$page?>&search_txt=<?=$search_txt?>"><button>이전글</button></a>
        <a href="detail.php?i_board=<?=$next_page["i_board"]?>&page=<?=$page?>&search_txt=<?=$search_txt?>"><button>다음글</button></a>
    </div>
    <script>
        function isDel() {            
            console.log('isDel 실행 됨!!');            
            if(confirm('삭제하시겠습니까?')) {
                location.href = "del.php?i_board=<?=$i_board?>";
            } 
        }
    </script>
</body>
</html>

