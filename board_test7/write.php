<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글작성</title>
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
    <div id="title"><h1>글작성</h1></div>
    <div id="main">
    <a href="list.php"><button>리스트</button></a>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" cols="22" rows="10" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="글작성">
            <input type="reset" value="초기화">
        </div>
    </form>
    </div>
    </div>
</body>
</html>