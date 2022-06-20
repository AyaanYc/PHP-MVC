<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>부트스트랩</title>
    <style>
        * { box-sizing:}
        div{border: 1px solid black;}
    </style>
</head>
<body>
<div class="container">
     한줄에 무조건4개
    <div class="row row-cols-4">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
<div class="container">
    그냥 크기만큼만 차지하고 안되면 줄바꿈
  <div class="row row-cols-auto">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
<hr>
<div class="container">
    한줄에 칼럼갯수가 기본1개 스몰일때2개 미디움일때 4개
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
<hr>
<div class="container">
    스몰일때 레벨1은 스몰이상부터는 컬럼3만큼차지 나머지하나는 컬럼9만큼차지
    레벨2는 기본 8:4비율 스몰이상부터는 반반
  <div class="row">
    <div class="col-sm-3">
      Level 1: .col-sm-3
    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-8 col-sm-6">
          Level 2: .col-8 .col-sm-6
        </div>
        <div class="col-4 col-sm-6">
          Level 2: .col-4 .col-sm-6
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-9">.col-9</div>
    <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, 이 4열 너비 div는 하나의 연속 단위로 새 줄에 래핑됩니다.</div>
    <div class="col-6">.col-6<br>후속 열은 새 줄을 따라 계속됩니다.</div>
  </div>
</div>
<hr>
<div class="container">
    div class="w-100"을 사용하여 강제줄바꿈
  <div class="row">
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

    <!-- Force next columns to break to new line 공간이 남아도 강제로 줄을바꿔준다. div만 써도 적용은됨  -->
    <div class="w-100"></div>

    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
  </div>
</div>
<hr>
<div class="container">
    d-none과 d-md-block를 사용하여 md사이즈 이상부터만 줄바꿈
  <div class="row">
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

    <!-- 
        md크기 미만이면 한줄에 차지하는공간만큼 다들어간다.(컬럼크기가4면 한줄에 3개씩들어감)
        md크기 이상부터는 div가 생긴다. 그래서 줄바꿈이됨
        d-none는 디스플레이 none
    -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
  </div>
</div>
<hr>
<!-- 오더는 5까지만 있음 순서조정용 (예: .order-1.order-md-2)-->
<div class="container">
    오더는 5까지만 있음 순서조정용 (예: .order-1.order-md-2)
  <div class="row">
    <div class="col">
      First in DOM, no order applied
    </div>
    <div class="col order-1">
      Second in DOM, with a larger order
    </div>
    <div class="col order-2">
      Third in DOM, with an order of 1
    </div>
  </div>
</div>
<hr>
<!-- 오른쪽으로 offset크기만큼 이동함 -->
<div class="container">
오른쪽으로 offset크기만큼 이동함
  <div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
  </div>
  <div class="row">
    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
  </div>
</div>
<hr>
<div class="container">
    뷰포트사이즈별로 ofset값 조절가능
  <div class="row">
    <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
  </div>
</div>
<hr>
<div class="container">
    ms-auto왼쪽에 남는공간만큼 자리차지를해줌 me-auto오른쪽
  <div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
  </div>
  <div class="row">
    <div class="col-md-3 ms-md-auto">.col-md-3 .ms-md-auto</div>
    <div class="col-md-3 ms-md-auto">.col-md-3 .ms-md-auto</div>
  </div>
  <div class="row">
    <div class="col-auto me-auto">.col-auto .me-auto</div>
    <div class="col-auto">.col-auto</div>
  </div>
</div>
</body>
</html>