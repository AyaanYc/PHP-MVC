<?php
namespace application\controllers;
include_once "application/utils/SessionUtils.php";

abstract class Controller {//abstract는 강제로 상속해서 사용 즉 BoardController클래스가 실행
    //생성자 
    public function __construct($action) {   //action=application에서 날라온 2차주소값    
        $view = $this->$action();  //board\list.php   BoardController에 있는 action에 해당하는 메소드호출
        require_once $this->getView($view); //최종경로파일을 this객체에 넣어서 가져옴, 즉 view파일 출력
    }
    
    protected function addAttribute($key, $val) {
        $this->$key = $val;
    }

    //최종 경로파일 
    protected function getView($view) {
        if(strpos($view, "redirect:") === 0) {
            header("Location: " . substr($view, 9));
            return;
        }
        return _VIEW . $view;               // board/list.php문자열
        // _VIEW = application/views/, $view = BoardController리턴값
    }
}

