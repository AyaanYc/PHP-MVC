<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1>리스트</h1>
            </div>
        </div>
        <div class="row justify-content-center ">
            <table class="table">
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성일</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->list as $item) { ?>
                    <tr data-i_board="<?=$item->i_board?>">
                        <td><?=$item->i_board?></td>
                        <td><?=$item->title?></td>
                        <td><?=$item->created_at?></td>
                    </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>