<?php
require "conn.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="text-center mb-4">
      <h2>Form</h2>
</div>
<form>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label  class="form-label"></label>Degree
  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <?php
  $sqlDegree="SELECT * FROM `degree`";
  $resultDegree = mysqli_query($conn, $sqlDegree);
  while($degree = mysqli_fetch_array($resultDegree)){
    ?>
  
  
    <option><?= $degree["degree_name"]; ?></option>
      <?php
  }
    ?>
    
</select>
</div>


<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"></label>Classes
  <select class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</div>
</html>
