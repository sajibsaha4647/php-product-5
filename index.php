<?php
$message = '';
require_once './code.php';
if (isset($_POST['btn'])) {
	$obj_info = new info();
	$message = $obj_info->saveStudentInfo($_POST);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<style>
	.footer_area{
		background-color:#000000;
		color:#ffffff;
		padding:15px;
	}
</style>
</head>
<body style="margin-top:60px;">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"><img src="images/Logo.png" height="60px" style="margin-top:-18px"></a>
			</div>
			<div class="collapse navbar-collapse" id="nav1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Add Student Info</a></li>
					<li><a href="view.php">View Student Info</a></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href=""><span class="glyphicon glyphicon-user"> SignUp</span></a></li>
					<li><a href=""><span class="glyphicon glyphicon-log-in"> LogIn</span></a></li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="text-center text-primary"><strong>ADD STUDENT INFORMATION</strong></h1>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h1 class="text-success text-center"><?php echo $message; ?></h1>
				<div class="well">
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<legend>CONTACT DETAILS</legend>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Name</label>
								<div class="col-md-8">
									<input type="text" name="name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Department</label>
								<div class="col-md-3">
									<select class="form-control" name="department" id="">
										<option value="0">CMT</option>
										<option value="1">AIDT</option>
										<option value="2">EMT</option>
										<option value="3">RAC</option>
									</select>
								</div>
								<label class="control-label col-md-2" for="">Semester</label>
								<div class="col-md-3">
									<select class="form-control name="semester" id="">
										<option value="0">1st</option>
										<option value="1">2nd</option>
										<option value="2">3rd</option>
										<option value="3">4th</option>
										<option value="4">5th</option>
										<option value="5">6th</option>
										<option value="6">7th</option>
										<option value="7">8th</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Shift</label>
								<div class="col-md-3">
									<select class="form-control" name="shift" id="">
										<option value="0">1st</option>
										<option value="1">2nd</option>
									</select>
								</div>
								<label class="control-label col-md-2" for="">Section</label>
								<div class="col-md-3">
									<select class="form-control name="section" id="">
										<option value="0">A</option>
										<option value="1">B</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Roll No.</label>
								<div class="col-md-8">
									<input type="number" name="roll" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Reg. No.</label>
								<div class="col-md-8">
									<input type="number" name="reg" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Mobile</label>
								<div class="col-md-8">
									<input type="number" name="mobile" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Email</label>
								<div class="col-md-8">
									<input type="email" name="email" class="form-control">
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend>PERSONAL INFORMATION</legend>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Father's Name</label>
								<div class="col-md-8">
									<input type="text" name="fname" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Mother's Name</label>
								<div class="col-md-8">
									<input type="text" name="mname" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Age</label>
								<div class="col-md-8">
									<input type="text" name="age" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Gender</label>
								<div class="col-md-8">
									<select class="form-control" name="gender" id="">
										<option value="0">Female</option>
										<option value="1">Male</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="control-label col-md-2">Address</label>
								<div class="col-md-8">
									<textarea class="form-control" name="address" id="" cols="0" rows="5"></textarea>
								</div>
							</div>
						</fieldset>

						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<input type="submit" name="btn" class="btn btn-primary btn-block" value="Save Student Info">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<div class="footer_area">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>Copyright&copy;CMT-5th</p>
				</div>
				<div class="col-md-offset-4 col-md-4">
					<a href=""><i class="fa fa-2x fa-facebook-square"></i></a>
					<a href=""><i class="fa fa-2x fa-twitter-square"></i></a>
					<a href=""><i class="fa fa-2x fa-instagram"></i></a>
					<a href=""><i class="fa fa-2x fa-linkedin-square"></i></a>
					<a href=""><i class="fa fa-2x fa-pinterest-square"></i></a>
				</div>
			</div>
		</div>
	</div>




	<script src="js/bootstrap.min.js"></script>
</body>
</html>