<div class="container-fluid">
    <div class="row py-4">              
        <?php if(isset($_SESSION[_LOGINUSER])) { ?>
            <div class="col text-center"><a href="/board/write">글쓰기</a></div>
            <div class="col text-center"><a href="/user/logout">로그아웃</a></div>
        <?php } else { ?>
            <div class="col text-center"><a href="/user/login">로그인</a></div>
            <div class="col text-center"><a href="/user/join">회원가입</a></div>
        <?php } ?>
        <div class="col text-center"><a href="/board/list">리스트</a></div>
    </div>
</div>