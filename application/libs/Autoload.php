<?php
// 인클루드역할
    spl_autoload_register(function($path) { // $path는 해당경로\해당경로\클래스명
        $path = str_replace('\\','/',$path);
        $paths = explode('/', $path);
        print $path . "<br>";
        if (preg_match('/model/', strtolower($paths[1]))) { //preg_match(정규표현식,문자열)인자들 비교해서 boolean
            $className = 'models';                          //strtolower(문자열)소문자로변환
        } else if (preg_match('/controller/',strtolower($paths[1]))) {
            $className = 'controllers';
        } else {
            $className = 'libs';
        }

        $loadpath = $paths[0].'/'.$className.'/'.$paths[2].'.php';
        
       // echo 'autoload $path : ' . $loadpath . '<br>';
        
        if (!file_exists($loadpath)) {
            echo " --- autoload : file not found. ($loadpath) ";
            exit();
        }
        require_once $loadpath;
    });
