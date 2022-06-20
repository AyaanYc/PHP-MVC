<?php
    include_once "db/db_board.php";
    session_start();
    $nm = "";
    $page = 1;
    if(isset($_GET['page'])) { 
        $page = intval($_GET['page']);
    }
    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
    $row_count = 20;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page -1) * $row_count
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
    // 검색버튼을 눌렀거나, 검색어가 존재한다면
    if(isset($_POST["search_input_txt"]) && $_POST['search_input_txt'] != "") {
        $param += [
            "search_select" => $_POST["search_select"], 
            "search_input_txt" => $_POST["search_input_txt"], 
        ];
        $list = search_board($param);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION['login_user']) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
            <div>
                <a href="list.php"><button>리스트</button></a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php"><button>글쓰기</button></a>
                    <a href='logout.php'><button>로그아웃</button></a>
                    <a href="profile.php">
                        프로필
                        <?php
                            $session_img = $_SESSION["login_user"]["profile_img"];
                            $profile_img = $session_img == null ? "profile.jpg" : $_SESSION["login_user"]["i_user"] . "/" .$session_img; 
                        ?>
                         <div class="circular__img wh40">
                            <img src="/board_login/img/profile/<?=$profile_img?>">
                        </div>
                    </a>
                <?php } else { ?>
                    <a href='login.php'><button>로그인</button></a>
                <?php } ?>
            </div>
        </header>
        <main class="main1">
            <h1>LIST.</h1>
            <table>
            <!-- 글번호, 제목, 작성자명, 등록일시(테이블) -->
            <div>
                <tr>
                    <th>글번호</th>
                    <th>제목</th>
                    <th>작성자명</th>                                              
                    <th>등록일시</th>
                    <th>프로필</th>
                </tr>
                <!-- <?php print_r($list);?> -->
                <?php foreach($list as $item) { ?>
                        <?php                            
                            $row_profile_img = $item["profile_img"] == null ? "profile.jpg" : $item["i_user"] . "/" . $item["profile_img"]; 
                        ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                            <td>
                                <?=$item["nm"]?>
                            </td>
                            <td><?=$item["created_at"]?></td>
                            <td>
                            <div class="circular__img wh40">
                                    <img src="/board_login/img/profile/<?=$row_profile_img?>">
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
            </div>
            </table>
            <div class="page">
                <?php for($i=1; $i<=$paging_count; $i++){ ?>
                    <span class="<?=$i===$page ? "pageSelected" :"" ?>">
                        <a href="list.php?page=<?=$i?>"><?=$i?></a>
                    </span>
                <?php }?>
                <!-- 
                    1. 한페이지에 보여줄 레코드수 정하기
                    2. ceil(count(전체 레코드수/한페이지 레코드수)) = 페이지 갯수
                    3. 페이지 갯수를 표시하는 함수 만들기(select)
                    4. 페이지 갯수를 페이지 하단에 표시(반복문사용)
                    5. 페이지번호에 링크삽입하고 페이지번호를 쿼리스트링으로 사용
                    6. limit(몇번째부터 보여줄건지,보여줄갯수)=(페이지번호-1*한페이지 레코드수, 한페이지 레코드수)       
                    7. 기존 리스트 페이지에 파라미터값을 받아서 limit적용
            -->
            </div>
            <form action="list.php" meyhod="post">
                <div>
                    <select name="search_select" >
                        <option value="search_writer">작성자</option>
                        <option value="search_title">제목</option>
                        <option value="search_ctnt">제목+내용</option>
                    </select>
                    <div>
                        <input type="text" name="search_input_txt">
                        <input type="submit" value="검색">
                    </div>
                </div>
            </form>
        </main>   
    </div>
</body>
</html>
