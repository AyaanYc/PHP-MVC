<?php

include_once "db/db_board.php";

$food_no = $_GET["food_no"];
$param = [
    "food_no" => $food_no
];

$item = sel_recipe($param);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>레시피 수정</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/mod.css">
</head>

<body>
    <?php
    include_once "header.php";
    ?>
    <main>
        <div class="main">
            <form action="mod_proc.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="food_no" value="<?= $food_no ?>" readonly>
                <div>
                    <label>
<<<<<<< HEAD
<<<<<<< HEAD
                        <img id="preview" class='food_img' src="/project/img/board/<?= $item['food_img'] ?>"style="cursor:pointer">
=======
                        <img class='food_img' src="/project/img/board/<?= $item['food_img'] ?>" width="160" height="160" style="cursor:pointer">
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
=======
                        <img class='food_img' src="/project/img/board/<?= $item['food_img'] ?>" width="160" height="160" style="cursor:pointer">
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
                        <div class="hidden"><input onchange="readURL(this);" type="file" name="img" accept="image/*"></div>
                    </label>
                </div>

                <div>
                    <div>
<<<<<<< HEAD
<<<<<<< HEAD
                        <label for="title">
                            <p>레시피 제목</p>
                        </label>
                        <input class="input" type="text" name="title" id="title" value="<?= $item['food_title'] ?>">
                    </div>

                    <div>
                        <label for="video">
                            <p>동영상 URL</p>
                        </label>
                        <input class="input" type="url" name="video" id="video" value="<?= $item['food_url'] ?>">
                    </div>

                    <div>
                        <label for="category">
                            <p>카테고리</p>
                        </label>
=======
=======
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
                        <label for="title">레시피 제목</label>
                        <input type="text" name="title" id="title" value="<?= $item['food_title'] ?>">
                    </div>

                    <div>
                        <label for="video">동영상 URL</label>
                        <input type="url" name="video" id="video" value="<?= $item['food_url'] ?>">
                    </div>

                    <div>
                        <label for="category">카테고리</label>
<<<<<<< HEAD
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
=======
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
                        <select name="category" id="category">
                            <?php
                            $param = [
                                '1' => '한식',
                                '2' => '양식',
                                '3' => '일식',
                                '4' => '중식'
                            ];
                            $num = $item['ctgr_no'];
                            for ($i = 1; $i <= count($param); $i++) {
                                if ($i == $num) {
                                    print "<option value='$i' selected>$param[$i]</option>";
                                } else {
                                    print "<option value='$i'>$param[$i]</option>";
                                }
                            }
                            ?>

                        </select>
                    </div>

<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="ctnt">
                        <label for="ctnt">
                            <p>내용</p>
                        </label>
                        <textarea wrap="hard" name="ctnt" cols="48" rows="20"><?= $item['food_ctnt'] ?></textarea>
                    </div>

                    <div>
                        <input class="submit" type="submit" value="등록">
                        <input class="submit" type="submit" value="취소" formaction="main.php">
=======
=======
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
                    <div>
                        <label for="ctnt">내용</label>
                        <textarea name="ctnt" cols="30" rows="20"><?= $item['food_ctnt'] ?></textarea>
                    </div>

                    <div>
                        <input type="submit" value="등록">
                        <input type="submit" value="취소" formaction="main.php">
<<<<<<< HEAD
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
=======
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                document.getElementById('preview').src = "";
            }
        }
    </script>
</body>

</html>