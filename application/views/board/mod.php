<div>
    <?php print "this객체: "; print_r($this); print "<br><br>";?>
    <h1>수정</h1>
    <form action="modProc" method="post">
        <input type="hidden" name="i_board" value="<?= $this->data->i_board ?>">
        <div>제목 : <input type="text" name="title" value="<?=$this->data->title ?>"></div>
        <div>내용 : <textarea name="ctnt"><?= $this->data->ctnt ?></textarea>
        <div>
            <input type="submit" value="수정">
            <a href="list"><input type="button" value="리스트"></a>
        </div>
    </form>
</div>
