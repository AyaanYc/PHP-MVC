<?php
namespace application\models; //namespace=클래스명이 똑같은 애를 여러개 만들때 둘을 구분, 폴더개념
use PDO;                      //경로로도 가능하지만 namespace로 사용하는게 좋음

class BoardModel extends Model {
    public function selBoardList() {
        $sql = "SELECT i_board, title, created_at
                FROM   t_board
                ORDER BY i_board DESC";
        $stmt = $this->pdo->prepare($sql);//문자열에서 특정위치에 원하는값을 쏙쏙 넣어주기 위해쓴다.
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);//여러줄 가져올때 fetchAll, PDO::FETCH_OBJ=배열안에 객체가담기게함
    }
    
    public function selBoard(&$param) {
        $sql = "SELECT A.i_board, A.title, A.ctnt, B.nm, A.created_at  
                FROM t_board A 
                INNER JOIN t_user B 
                ON A.i_user = B.i_user
                WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function updBoard(&$param) {
        $sql = "UPDATE t_board SET title = :title, ctnt = :ctnt WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $param["title"]);
        $stmt->bindValue(':ctnt', $param["ctnt"]);
        $stmt->bindValue(':i_board', $param["i_board"]);
        return $stmt->execute();
    }

    public function delBoard(&$param) {
        $sql = "DELETE FROM t_board WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        return $stmt->execute();
    }

    public function insBoard(&$param) {
        $sql = "INSERT INTO t_board
                (title, ctnt, i_user)
                VALUES
                (:title, :ctnt, :i_user)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $param["title"]);
        $stmt->bindValue(':ctnt', $param["ctnt"]);
        $stmt->bindValue(':i_user', $param["i_user"]);
        $stmt->execute();
    }
}

