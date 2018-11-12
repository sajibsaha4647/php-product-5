<?php
class info {

	protected $link;
	public function __construct() {
		$hostname = 'localhost';
		$username = 'root';
		$password = '';
		$db_name = 'db_computer';
		$this->link = mysqli_connect($hostname, $username, $password, $db_name);
		if (!$this->link) {
			die('Connection Fail' . mysqli_error($this->link));
		}
	}
	// Save student Information

	public function saveStudentInfo($data) {
		$sql = "INSERT INTO tb_student_info (name, department, semester, shift, section, roll, reg, mobile, email, fname, mname, age, gender, address) VALUES ('$data[name]', '$data[department]', '$data[semester]', '$data[shift]', '$data[section]', '$data[roll]', '$data[reg]', '$data[mobile]', '$data[email]', '$data[fname]', '$data[mname]', '$data[age]', '$data[gender]', '$data[address]')";
		if (mysqli_query($this->link, $sql)) {
			$message = "Your Data Saved Successfully";
			return $message;
		} else {
			die('Query Problem' . mysqli_error($this->link));
		}
	}

	// View Student Information

	public function viewStudentInfo() {
		$sql = "SELECT * FROM tb_student_info";
		if (mysqli_query($this->link, $sql)) {
			$query_result = mysqli_query($this->link, $sql);
			return $query_result;
		} else {
			die('Query Problem' . mysqli_error($this->link));
		}
	}

	// Edit Studnet Information
	public function editStudentInfo($student_id) {
		$sql = "SELECT * FROM  tb_student_info WHERE id = '$student_id'";
		if (mysqli_query($this->link, $sql)) {
			$query_result = mysqli_query($this->link, $sql);
			return $query_result;
		} else {
			die('Query Problem' . mysqli_error($this->link));
		}
	}

	// Update Student Information
	public function updateStudentInfo($student_id) {
		$sql = "UPDATE  tb_student_info SET name='$student_id[name]',department='$student_id[department]',semester='$student_id[semester]',shift='$student_id[shift]',section='$student_id[section]', roll='$student_id[roll]', reg='$student_id[reg]', mobile='$student_id[mobile]', email='$student_id[email]', fname='$student_id[fname]', mname='$student_id[mname]', age='$student_id[age]', gender='$student_id[gender]', address='$student_id[address]' WHERE id = '$student_id[id]'";
		if (mysqli_query($this->link, $sql)) {
			header('Location: view.php');
		} else {
			die('Query Problem' . mysqli_error($this->link));
		}

	}

	// Delete Studnet information
	public function deleteStudentInfo($student_id) {
		$sql = "DELETE FROM  tb_student_info WHERE id = '$student_id'";
		if (mysqli_query($this->link, $sql)) {
			$message = "Delete Successfully";
			return $message;
		} else {
			die('Query Problem' . mysqli_error($this->link));
		}
	}
}

?>