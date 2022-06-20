<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>picture</title>
</head>
<body>
    <!-- 뷰포트크기에따라 이미지 변경가능 -->
    <picture>
        <!-- 위드값 700~ -->
        <source media="(min-width: 700px)" srcset="https://i.picsum.photos/id/631/900/500.jpg?hmac=GBEig1Lk4uOsa9F3BAUHZpy2kkgyBW83ujYLOR2Dmag">
        <!-- 위드값 400~700 -->
        <source media="(min-width: 400px)" srcset="https://i.picsum.photos/id/733/500/300.jpg?hmac=hnsZUNrNCxOXrH_nRtJv43hiJ7RM8Sd79deddDkpmuA">
        <!-- 위드값 400미만 -->
        <img src="https://i.picsum.photos/id/306/300/180.jpg?hmac=RBhyqDZG2GCY0v9PbRyXZkZMMlOKQZH8qmlih1zGy1c" alt="People">
    </picture>
</body>
</html>