<?php
//파일담아주는역할
namespace application\libs;

class Application{
    
    public $controller;
    public $action;

    public function __construct() {
        $getUrl = '';
        if (isset($_GET['url'])) {
            $getUrl = rtrim($_GET['url'], '/');//맨 오른쪽에있는 / 제거
            $getUrl = filter_var($getUrl, FILTER_SANITIZE_URL);// 특수기호 제거
            //getUrl = 주소값을 올바르게 만듬
        }
        $getParams = explode('/', $getUrl);// /를 기준으로 나누어준다(배열)
        $controller = isset($getParams[0]) && $getParams[0] != '' ? $getParams[0] : 'board';
        //2차주소값
        $action = isset($getParams[1]) && $getParams[1] != '' ? $getParams[1] : 'index';
        if (!file_exists('application/controllers/'. $controller .'Controller.php')) {
            echo "해당 컨트롤러가 존재하지 않습니다.";
            exit();
        }
        $controllerName = 'application\controllers\\' . $controller . 'controller';
        new $controllerName($action);
        // new boardcontroller($action);
        //부모생성자호출 Controller가 호출됨 require_once "action에해당하는 view파일"
    }
}
//index.php에서 호출해서 생성자가 실행됨
//주소값에 1차/2차주소값에 해당하는 파일이 없으면 index.php로 바꿔주고  
//$action = "list"