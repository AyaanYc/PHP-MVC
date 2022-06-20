<?php
    include_once "db.php";

    function ins_board(&$param)
    {
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

    function sel_paging_count(&$param){
        $row_count = $param['row_count'];
        $sql = "SELECT ceil(COUNT(i_board)/$row_count) as cnt
                  FROM t_board";
                $conn = get_conn();     
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                $row = mysqli_fetch_assoc($result);
                return $row['cnt'];
    }

    function sel_board_list(&$param) {
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $sql = "SELECT A.i_board, A.title, A.created_at
                     , B.i_user, B.nm, B.profile_img
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 ORDER BY A.i_board DESC
                 LIMIT $start_idx, $row_count";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    } 

    function sel_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT A.title, A.ctnt, A.created_at
                     , B.i_user, B.nm, B.updated_at
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 WHERE A.i_board = $i_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    
    function pre_page(&$param){
        $i_board = $param['i_board'];
        $sql = 
        "   SELECT  i_board
            FROM    t_board
            WHERE   i_board < $i_board
            ORDER BY i_board DESC
            LIMIT 1;
        ";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return $row["i_board"];
        }
        return 0;
    }

    function next_page(&$param){
        $i_board = $param['i_board'];
        $sql = 
        "   SELECT  i_board
            FROM    t_board
            WHERE   i_board > $i_board
            ORDER BY i_board 
            LIMIT 1;
        ";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return $row["i_board"];
        }
        return 0;
        
    }
    
    function del_board(&$param){
        $i_board = $param['i_board'];
        $i_user = $param['i_user'];
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

    function mod_proc_board(&$param){
        $i_board = $param['i_board'];
        $i_user = $param['i_user'];
        $title = $param['title'];
        $ctnt = $param['ctnt'];
        $sql =
        "   UPDATE t_board
            SET title = '$title',
                ctnt = '$ctnt',
                updated_at = now()
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

         $conn = get_conn();
         $result = mysqli_query($conn, $sql);
         mysqli_close($conn);
         return $result;
    }

    // function search_board(&$param){
    //     $conn = get_conn();
    //     $search_select = $param['search_select'];
    //     $search_input_txt = $param['search_input_txt'];
    //     $textArray = explode(" ", $search_input_txt);// 검색어를 공백으로 나눈다.
    //     $where = "nm"
    //     $query = SELECT * FROM t_board WHERE title LIKE "%선생님은%" OR title LIKE "%몇%";

    //     switch($search_select){
    //         case "search_writer":
    //             $where = "nm";
    //             break;
    //         case "search_title":
    //             $where = "title";
    //             break;
    //         case "search_ctnt":
    //             $where = "ctnt";
    //             break;
    //         default:
    //     }

        
    //     mysqli_close($conn);
    //     // return $result;
    //     return null;
    // }