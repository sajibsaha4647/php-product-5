<?php
require_once './code.php';
$student_id = $_GET['id'];
$obj_info = new info();
$query_result = $obj_info->editStudentInfo($student_id);
$student_info = mysqli_fetch_assoc($query_result);

if (isset($_POST['btn'])) {
	$obj_info = new info();
	$obj_info->updateStudentInfo($_POST);
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
					<li><a href="index.php">Add Student Info</a></li>
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
				<h1 class="text-center text-primary"><strong>EDIT STUDENT INFORMATION</strong></h1>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="well">
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<legend>CONTACT DETAILS</legend>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Name</label>
								<div class="col-md-8">
									<input type="text" name="name" class="form-control" value="<?php echo $student_info['name']; ?>">
									<input type="hidden" name="id" class="form-control" value="<?php echo $student_info['id']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Department</label>
								<div class="col-md-3">
									<select class="form-control" name="department" id="">
										<?php
echo '<option value="0"' . ($student_info['department'] == "0" ? 'selected' : '') . '>CMT</option>';
echo '<option value="1"' . ($student_info['department'] == "1" ? 'selected' : '') . '>AIDT</option>';
echo '<option value="2"' . ($student_info['department'] == "2" ? 'selected' : '') . '>EMT</option>';
echo '<option value="3"' . ($student_info['department'] == "3" ? 'selected' : '') . '>RAC</option>';
?>
									</select>
								</div>
								<label class="control-label col-md-2" for="">Semester</label>
								<div class="col-md-3">
									<select class="form-control name="semester" id="">
										<?php
echo '<option value="0"' . ($student_info['semester'] == "0" ? 'selected' : '') . '>1st</option>';
echo '<option value="1"' . ($student_info['semester'] == "1" ? 'selected' : '') . '>2nd</option>';
echo '<option value="2"' . ($student_info['semester'] == "2" ? 'selected' : '') . '>3rd</option>';
echo '<option value="3"' . ($student_info['semester'] == "3" ? 'selected' : '') . '>4th</option>';
echo '<option value="4"' . ($student_info['semester'] == "5" ? 'selected' : '') . '>5th</option>';
echo '<option value="5"' . ($student_info['semester'] == "6" ? 'selected' : '') . '>6th</option>';
echo '<option value="6"' . ($student_info['semester'] == "7" ? 'selected' : '') . '>7th</option>';
echo '<option value="7"' . ($student_info['semester'] == "8" ? 'selected' : '') . '>8th</option>';
?>
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Shift</label>
								<div class="col-md-3">
									<select class="form-control" name="shift" id="">
										<?php
echo '<option value="0"' . ($student_info['shift'] == "0" ? 'selected' : '') . '>1st</option>';
echo '<option value="1"' . ($student_info['shift'] == "1" ? 'selected' : '') . '>2nd</option>';
?>
									</select>
								</div>
								<label class="control-label col-md-2" for="">Section</label>
								<div class="col-md-3">
									<select class="form-control name="section" id="">
										<?php
echo '<option value="0"' . ($student_info['section'] == "0" ? 'selected' : '') . '>A</option>';
echo '<option value="1"' . ($student_info['section'] == "1" ? 'selected' : '') . '>B</option>';
?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="" >Roll No.</label>
								<div class="col-md-8">
									<input type="number" name="roll" class="form-control" value="<?php echo $student_info['roll']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Reg. No.</label>
								<div class="col-md-8">
									<input type="number" name="reg" class="form-control" value="<?php echo $student_info['reg']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Mobile</label>
								<div class="col-md-8">
									<input type="number" name="mobile" class="form-control" value="<?php echo $student_info['mobile']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Email</label>
								<div class="col-md-8">
									<input type="email" name="email" class="form-control" value="<?php echo $student_info['email']; ?>">
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend>PERSONAL INFORMATION</legend>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Father's Name</label>
								<div class="col-md-8">
									<input type="text" name="fname" class="form-control" value="<?php echo $student_info['fname']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Mother's Name</label>
								<div class="col-md-8">
									<input type="text" name="mname" class="form-control" value="<?php echo $student_info['mname']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Age</label>
								<div class="col-md-8">
									<input type="text" name="age" class="form-control"value="<?php echo $student_info['age']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2" for="">Gender</label>
								<div class="col-md-8">
									<select class="form-control" name="gender" id="">
										<?php
echo '<option value="0"' . ($student_info['gender'] == "0" ? 'selected' : '') . '>Female</option>';
echo '<option value="1"' . ($student_info['gender'] == "1" ? 'selected' : '') . '>Male</option>';
?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="control-label col-md-2">Address</label>
								<div class="col-md-8">
									<textarea class="form-control" name="address" id="" cols="0" rows="5"><?php echo $student_info['address']; ?></textarea>
								</div>
							</div>
						</fieldset>

						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Student Info">
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