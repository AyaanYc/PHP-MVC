(function(){
    const btnDel = document.querySelector('#btnDel');
    btnDel.addEventListener('click', function(){
        confirm('삭제하시겠습니까?') ? 
        location.href = `del?i_board=${this.dataset.i_board}` 
        : "";
    })
})();