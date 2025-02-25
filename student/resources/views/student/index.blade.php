<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hello index blade view
    <?php

    ?>
    @php
     dd($data);   
    @endphp
    <div class="container mt-3">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $value)
             <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>
             </tr>              
            @endforeach
          </tbody>
        </table>
      </div>
</body>
</html>