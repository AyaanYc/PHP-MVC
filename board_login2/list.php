<?php
    include_once "db/db_board.php";
    session_start();
    $nm = "";
    $page = 1;
    if(isset($_GET['page'])){
        $page = intval($_GET['page']);
    }
    if(isset($_SESSION['login_user'])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user['nm'];
    }

    $row_count_list = [5, 10, 15, 20];

    if(isset($_POST['board_count_list'])){
        $row_count = $_POST['board_count_list'];
    }else{
        $row_count = 10;
    }
   
    $param = [
        'row_count' => $row_count,
        'start_idx' => ($page-1) * $row_count,
    ];

    $list = sel_board_list($param);
    $paging_count = sel_paging_count($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="body">
        <header>
            <div class="wel"><?=isset($login_user) ? $nm."님 환영합니다." : "";?></div>
            <div>
                <a href="list.php"><button>리스트</button></a>
                <?php
                if(isset($login_user)) { ?>
                    <a href="write.php"><button>글쓰기</button></a>
                    <a href="logout.php"><button>로그아웃</button></a>
                <?php } else { ?>
                    <a href="login.php"><button>로그인</button></a>
                <?php } ?>
            </div>
        </header>
        <!-- 글번호, 제목, 작성자명, 등록일시(테이블) -->
        <main>
            <h1>LIST</h1>
            <form method="post" >
                <select name="board_count_list" onchange="this.form.submit()">
                    <?php
                        foreach ($row_count_list as $count) {
                            echo select_check($row_count, $count).$count."개</option>";
                        }
                    ?>
                </select>
            </form>
            <table>
                <tr class="c_title">
                    <th>글번호</th>
                    <th>제목</th>
                    <th>작성자명</th>
                    <th>등록일시</th>
                    <th>조회수</th>
                </tr>
                <?php foreach($list as $item) { ?>
                        <tr class="ctnt">
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                            <td><?=$item["nm"]?></td>
                            <td><?=$item["created_at"]?></td>
                            <td><?=$item["views"]?></td>
                        </tr>
                    <?php } ?>
            </table>
                <div class="page">
                    <?php if(@$_GET['page']!=1 && $page!==1){?>
                        <a href="list.php?page=<?=$page-1?>">◀</a>
                    <?php }?>
                    <?php for($i=1; $i<=$paging_count; $i++){?>
                        <span class="<?=$i===$page ? "pageSeleted" :"" ?>">
                            <a href="list.php?page=<?=$i?>"><?=$i?></a>
                        </span>               
                    <?php }?>
                    <?php if(@$_GET['page']!=$paging_count){?>
                        <a href="list.php?page=<?=$page+1?>">▶</a>
                    <?php }?>
                 
                </div>
        </main>
    </div>
</body>
</html>