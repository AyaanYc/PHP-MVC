<?php
    setcookie("country", "Korea");
    // 셋쿠키는 그즉시 적용은안되고 새로고침을 한번 하거나 다음페이지부터 적용이됨
?>
<a href="cookie2.php">Next Page</a>
    setcookie("country", "Korea");//서버에서 응답으로 알려주는작업
    // 셋쿠키는 그즉시 적용은안되고 새로고침을 한번 하거나 다음페이지부터 적용이됨 새로고침하면 덮어쓰기
    if(isset($_COOKIE['country'])){
        echo "Country : ", $_COOKIE['country'], "<br>";
    }
?>
<a href="cookie2.php">Next Page</a>
<!-- 세션(로그인자료)은 서버에저장 쿠키(쇼핑몰자료)는 클라에저장 -->
<!-- 세션(로그인자료)은 서버에저장 쿠키(쇼핑몰자료)는 클라에저장 -->