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

  <!-- รหัสนักศึกษา : <input type="text" name="Id" id="Id"  >
  <br>
  <br> -->
  ชื่อ: <input type="text" name="studentname" id="studentname" >
  <!-- <br>
  <br>
  นามสกุล: <input type="text" name="lastname" id="lastname" >
  <br>
  <br>
  รหัสวิชา: <input type="text" name="idsub" id="idsub" >
  <br>
  <br>
  เกรด : <input type="text" name="grade" id="grade" >
  <br>
  <br>
  เทอม : <input type="text" name="term" id="term" >
  <br>
  <br> -->
  <button type="login" class="btn btn-primary">Submit</button>
  </form>
  

     

    
</body>
</html>