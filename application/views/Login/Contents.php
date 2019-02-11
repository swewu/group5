<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body style="background-color: #2542ff;">

<div class="container">
	<div class="card" style="width: 50%; margin-left: 25%; margin-top: 10%; font-family: 'Kanit', sans-serif;">
		<div class="card-body">
			<h1 style="font-family: 'Kanit', sans-serif; font-size: 30px;">ระบบบันทึกรายวิชาที่ตกค้าง</h1>
			<form action="<?php echo site_url('Welcome/checkLogin') ?>" method="get">
				<div class="form-group">
					<label for="exampleInputEmail1">ชื่อผู้ใช้งาน</label>
					<input type="text" class="form-control" id="username" name="username"  placeholder="ชื่อผู้ใช้งาน">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">รหัสผ่าน</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
				</div>
				<!-- <div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div> -->
				
					<button type="login" class="btn btn-primary">Submit</button>
				</a>
			</form>
		</div>
	</div>
</div>

<!-- <form action="<?php echo base_url('Login/login') ?>" method="get">
	<input type="text" name="id" placeholder="id" required>
	<input type="text" name="password" placeholder="password" required>
	<input type="submit" value="Login"></form>
</form>

</body>
</html> -->