<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color: wheat;
        }
      .container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            margin: 0;
        }
        .container img {
            width: 500px;  /* 修改圖片寬度 */
            height: 250px; /* 修改圖片高度 */
        }
        .container a {
            text-decoration: none;
            color: black;
        }
        .title:hover{
            color: lightblue;
        }
    </style>
</head>
<body>
    <div class="title"><h1>OCEAN</h1></div>
    <div class="container">  <p><a href="./f1">
        <img src="https://cdn.pixabay.com/photo/2024/05/26/16/35/anime-8789124_1280.jpg" alt=""></p></div>
    <div class="container">  <p><a href="./f2">
        <img src="https://cdn.pixabay.com/photo/2017/09/08/09/25/ocean-2728180_1280.jpg" alt=""></a></p></div>
    <div class="container">  <p><a href="./f3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuo75e-y9NST4BO1l3d_IlfBdITB7fEq7_tolCOJ0GWQQscGwp&s" alt=""></a></p></div>
       
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        // 當滑鼠移到圖片上時放大，移開時還原
        $('img').hover(
            function() {
                $(this).css('transform', 'scale(1.2)'); // 放大圖片
            }, 
            function() {
                $(this).css('transform', 'scale(1)'); // 還原圖片大小
            }
        );
    </script> 
</body>
</html> 