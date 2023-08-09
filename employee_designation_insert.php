<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 
	 $emp_designation = $_POST['emp_designation'];
	 
	 $sql = "INSERT INTO employee_designation_details(emp_designation)
	 VALUES ('$emp_designation')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:employee_designation_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>