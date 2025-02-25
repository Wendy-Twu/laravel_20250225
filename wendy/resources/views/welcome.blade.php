<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>
<body>
<div class="test"><h1>HAPPY NEW</h1></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-4">
     <img src="{{asset("assets/images/04.jpg")}}" alt="" src="" class="img">
      </div>
   <div class="col-md-4">
        <img src="{{asset("assets/images/01.jpg")}}" alt="" src=""class="img">
   </div>
   <div class="col-md-4">
        <img src="{{asset("assets/images/03.jpg")}}" alt="" src=""class="img">
   </div>
</div>
</body>
</html>