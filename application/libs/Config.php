<?php
//유지보수를 위해 상수사용(대량키워드 수정용이)
//실수 안하기 위해 사용(오타시 빨간줄표시해줌)
    define('_ROOT', $_SERVER['DOCUMENT_ROOT']);
    define('_DBTYPE', 'mysql'); //mysql, mariadb 등
    define('_DBHOST', 'localhost'); //DB주소
    define('_DBNAME', 'board_login'); //DB명
    define('_DBUSER', 'root'); //아이디
    define('_DBPASSWORD', '506greendg@'); //비번
    define('_CHARSET', 'utf8');
    define("_VIEW", "application/views/");

    define("_TITLE", "title");
    define("_HEADER", "header");
    define("_MAIN", "main");
    define("_FOOTER", "footer");

    define("_LOGINUSER", "loginUser");

    define("_CSS", "css");
    define("_JS", "js");

    