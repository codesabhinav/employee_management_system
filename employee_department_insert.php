<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 
	 $emp_department = $_POST['emp_department'];
	 
	 $sql = "INSERT INTO employee_department_details(emp_department)
	 VALUES ('$emp_department')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:employee_department_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>