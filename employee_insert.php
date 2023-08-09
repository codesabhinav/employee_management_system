<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $emp_name = $_POST['emp_name'];
	 $emp_email = $_POST['emp_email'];
	 $emp_phone = $_POST['emp_phone'];
	 $emp_designation = $_POST['emp_designation'];
	 $emp_city = $_POST['emp_city'];
	 $emp_experience = $_POST['emp_experience'];
	 $emp_department = $_POST['emp_department'];


	 $sql = "INSERT INTO employee_details(emp_name,emp_email,emp_phone,emp_designation,emp_city,emp_experience,emp_department)
	 VALUES ('$emp_name','$emp_email','$emp_phone','$emp_designation','$emp_city','$emp_experience','$emp_department')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:employee_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>