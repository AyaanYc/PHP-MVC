<?php
namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller {
    public function list() {// 두번째 주소값 list
        $model = new BoardModel();
        $this->addAttribute("list", $model->selBoardList()); // list멤버필드를 만들고 selboardList()로 값을 넣음 
        // $this->$list = $model->selBoardList(); 
        $this->addAttribute("js", ["board/list"]);
        $this->addAttribute("css", ["common"]);
        $this->addAttribute(_TITLE, "리스트");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/list.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php"; //view 파일명!!
    }

    public function detail() {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();
        //print "i_board : {$i_board}<br>";
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute(_TITLE, "디테일");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/detail.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        $this->addAttribute("js", ["board/detail"]);//배열로 들어감
        return "template/t1.php"; //view 파일명!!
        //글번호, 제목, 내용, 글쓴이 이름, 작성일
    }

    public function del() {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();
        $param = ["i_board" => $i_board];
        $model->delBoard($param);
        return "redirect:list";
    }

    public function mod() {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute(_TITLE, "수정");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

    public function modProc() {
        $i_board = $_POST["i_board"];
        $title = $_POST["title"];
        $ctnt = $_POST["ctnt"];
        $model = new BoardModel();
        $param = ["i_board" => $i_board, "ctnt" => $ctnt, "title" => $title];
        $model->updBoard($param);
        return "redirect:/board/detail?i_board=".$i_board;
    }

    public function write() {
        $this->addAttribute(_TITLE, "글쓰기");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/write.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

    public function write_proc() {
        $title = $_POST["title"];
        $ctnt = $_POST["ctnt"];
        $i_user = $_SESSION[_LOGINUSER]->i_user;
        $model = new BoardModel();
        $param = ["ctnt" => $ctnt, "title" => $title, "i_user" => $i_user];
        $model->insBoard($param);
        return "redirect:list";
    }
}