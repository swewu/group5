<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>
<form action="<?php echo site_url('Welcome/insert') ?>" method="get">
<body>
<form>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    </ul>
  </div>
</nav>
<center>
<div class="card" style="width: 50%;">

<div class="container">
  <br>
  
</div>

  <div class="card-body" backgroundcolor="#ffff">
  
  <div class="row" style="width: 30rem;">
  <div class="col">
    <label for="Id">รหัสนักศึกษา : </label>
      <input type="text" class="form-control" name ="studentname" placeholder="รหัสนักศึกษา">
    </div>
    <div class="col">
    <label for="Id">ชื่อ : </label>
      <input type="text" class="form-control" name ="studentname" placeholder="ชื่อ">
    </div>
    <div class="col">
    <label for="Id">นามสกุล : </label>
      <input type="text" class="form-control" name = "studentlastname" placeholder="นามสกุล">
    </div>
  </div>
  <br>
  <div class="row" style="width: 30rem;">
    <div class="col">
    <label for="Id">รหัสวิชา : </label>
      <input type="text" class="form-control" name="courseid" placeholder="รหัสวิชา">
    </div>
    <div class="col">
    <label for="Id">ชื่อวิชา : </label>
      <input type="text" class="form-control"name="coursename" placeholder="ชื่อวิชา">
    </div>
  </div>
<<<<<<< HEAD
  <div class="row">
    <label for="Id">เกรด : </label>
      <input type="text" class="form-control"name="grade" placeholder="เกรด">
=======

  <div class="row" style="width: 30rem;">
    <div class="col">
    <label for="Id">เกรด : </label>
      <input type="text" class="form-control" name="courseid" placeholder="เกรด">
>>>>>>> b49d2aa50aee29957b135c69d0996abe72858910
    </div>
    <div class="col">
    <label for="Id">เทอม : </label>
      <input type="text" class="form-control"name="coursename" placeholder="เทอม">
    </div>
    <div class="col">
    <label for="Id">ปีการศึกษา : </label>
      <input type="text" class="form-control"name="coursename" placeholder="ปีการศึกษา">
    </div>
  </div>
  <center>
<br>
  
  
  <button type="submit" class="btn btn-primary">Submit</button></div>

</center>

</div>
</div>
  </center>
  </form>



    
</body>
</html>