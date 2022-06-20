<?php
    session_start();
    $_SESSION['var1'] = "v1";
    $_SESSION['var2'] = "v2";

    // unset($_SESSION['var2']);// 세션을 그 페이지에서 즉시 없애줌
    
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="session_destroy.php">destroy</a>