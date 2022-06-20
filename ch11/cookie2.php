<?php
    echo "Country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    $_COOKIE['country'] = "UK"; //(서버)메모리상에서만 바꾸고 실제 쿠키값이 바뀐것은 아님
    $_COOKIE['country'] = "UK"; //(서버)메모리상에서만 바꾸고 실제 쿠키값이 바뀐것은 아님
    echo "Country : ", $_COOKIE['country'], "<br>";
    
    // setcookie("country", "UK");// 셋을 해줘야 프론트앤드에서도 쿠키값이바뀜

    // unset($_COOKIE['country']);
    // setcookie("country");//  셋쿠키에 값을 안넣어주면 쿠키값이 안 지워짐
    //                    언셋만으로는 값이 클라이언트상으로는 지워지지 않음(보여지기에만 없어짐)
    echo "Country : ", $_COOKIE['country'], "<br>";