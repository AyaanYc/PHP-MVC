<h1>글쓰기</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="write_proc" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="글등록">
            <input type="reset" value="초기화">
        </div>
    </form>