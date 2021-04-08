<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron text-center">
  <h1> TASKS TO DO </h1>
  <p>By: Tirth Shah</p> 
</div>
  
<div class="container">
    @yield('content')
</div> 

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>TASKS TO DO</p>
</div>

</body>
</html>