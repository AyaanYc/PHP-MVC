<?php
    session_start();
    session_destroy();
    // session_unset();
    // session_regenerate_id(true); 세션ID값을 변경한다.확실치않음
    // session_unset();
    // session_regenerate_id(true); 세션ID값을 변경한다.확실치않음
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
    // destroy는 현재페이지는 남아있고 다음창부터는 죽임
?>
<a href="confirm.php">확인</a>
