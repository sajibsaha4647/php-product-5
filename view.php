<?php
$message = '';
require_once './code.php';
$obj_info = new info();
$query_result = $obj_info->viewStudentInfo();

if (isset($_GET['status'])) {
	if ($_GET['status'] == 'delete') {
		$student_id = $_GET['id'];
		$obj_info = new info();
		$message = $obj_info->deleteStudentInfo($student_id);
	}
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
					<li class="active"><a href="view.php">View Student Info</a></li>
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
				<h1 class="text-center text-primary"><strong>STUDENT INFORMATION</strong></h1>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center text-success"><?php echo $message; ?></h1>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<tr>
									<th>Serial No.</th>
									<th>Name</th>
									<th>Department</th>
									<th>Semester</th>
									<th>Shift</th>
									<th>Section</th>
									<th>Roll No.</th>
									<th>Reg. No.</th>
									<th>Mobile</th>
									<th>Email</th>
									<th>Father's Name</th>
									<th>Mother's Name</th>
									<th>Age</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
								<?php while ($student_info = mysqli_fetch_assoc($query_result)) {
	?>
									<tr>
										<td><?php echo $student_info['id']; ?></td>
										<td><?php echo $student_info['name']; ?></td>
										<td>
											<?php
switch ($student_info['department']) {
	case '0':
		echo "CMT";
		break;
	case '1':
		echo "AIDT";
		break;
	case '2':
		echo "EMT";
		break;
	default:
		echo "RAC";
	}
	?>
										</td>
										<td>
											<?php
switch ($student_info['semester']) {
	case '0':
		echo "1st";
		break;
	case '1':
		echo "2nd";
		break;
	case '2':
		echo "3rd";
		break;
	case '3':
		echo "4th";
		break;
	case '4':
		echo "5th";
		break;
	case '5':
		echo "6th";
		break;
	case '6':
		echo "7th";
		break;
	default:
		echo "8th";
	}
	?>
										</td>
										<td>
											<?php
if ($student_info['shift'] == 0) {
		echo '1st';
	} else {
		echo '2nd';
	}
	?>
										</td>
										<td>
											<?php
if ($student_info['section'] == 0) {
		echo 'A';
	} else {
		echo 'B';
	}
	?>
										</td>
										<td><?php echo $student_info['roll']; ?></td>
										<td><?php echo $student_info['reg']; ?></td>
										<td><?php echo $student_info['mobile']; ?></td>
										<td><?php echo $student_info['email']; ?></td>
										<td><?php echo $student_info['fname']; ?></td>
										<td><?php echo $student_info['mname']; ?></td>
										<td><?php echo $student_info['age']; ?></td>
										<td>
											<?php
if ($student_info['gender'] == 1) {
		echo 'Male';
	} else {
		echo 'Female';
	}
	?>
										</td>
										<td><?php echo $student_info['address']; ?></td>

										<td>
											<a href="edit.php?id=<?php echo $student_info['id']; ?>" class="btn btn-primary" title="student Edit"><span class="glyphicon glyphicon-edit"></span></a>

											<a href="?status=delete&&id=<?php echo $student_info['id']; ?>" class="btn btn-danger" title="student Delete"><span class="glyphicon glyphicon-trash"></span></a>
										</td>
									</tr>
								<?php }?>
							</table>
						</div>
					</div>
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