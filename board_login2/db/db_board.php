<?php
    include_once "db.php";

    function ins_board($param){
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];
        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', $i_user)
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list(&$param) {
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $sql = 
        "   SELECT i_board, title, B.nm, A.created_at, A.views
            FROM  t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            ORDER BY A.i_board deSC
            limit $start_idx, $row_count
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    } 
    
    function sel_board(&$param) {
        $i_board = $param['i_board'];
        $sql = 
        "   SELECT A.i_board, A.ctnt, B.nm, A.created_at, A.updated_at, A.title, A.i_user
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            WHERE i_board = $i_board
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function sel_paging_count(&$param){
        $row_count = $param['row_count'];
        $sql =
        "   SELECT ceil(count(i_board)/$row_count) as cnt
            FROM t_board
        ";
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            $row = mysqli_fetch_assoc($result);
            return $row['cnt'];
    }

    function mod_board(&$param){
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $sql =
        "   UPDATE t_board
            SET  
            title = '$title',
            ctnt = '$ctnt'
            WHERE i_board = $i_board
            AND   i_user = $i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function del_board(&$param){
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];
        $sql = 
        "   DELETE FROM t_board
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function pre_board(&$param){
        $i_board = $param['i_board'];
        $sql = 
        "   SELECT i_board
            FROM t_board
            WHERE i_board < $i_board
            ORDER BY i_board DESC
            LIMIT 1;
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return $row['i_board'];
        }
        else{
            return 0;
        }
    }

    function next_board(&$param){
        $i_board = $param['i_board'];
        $sql = 
        "   SELECT i_board
            FROM t_board
            WHERE i_board > $i_board
            ORDER BY i_board 
            LIMIT 1;
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return $row['i_board'];
        }
        else{
            return 0;
        }
    }

    function select_check($row_count,$count){
        if($row_count == $count){
            echo "<option value=".$count." selected>";
        }
        else{
            echo "<option value=".$count.">";
        }
    }

    function views(&$param){
        $i_board = $param["i_board"];
        $sql = 
        "   UPDATE t_board
            SET views = views + 1
            WHERE i_board = $i_board             
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

  
