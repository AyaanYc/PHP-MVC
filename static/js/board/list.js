(function(){
    const trList = document.querySelectorAll('tbody > tr');

    //예 dataset 사용방법 알기
    const tr1 = trList[0];
    console.log(tr1.dataset);

    trList.forEach((item,idx)=>{
        item.addEventListener('click', ()=>{
            let url = "detail?i_board=";
            location.href= url + item.dataset.i_board;
        })
    });
})();