<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $emp_name = $_POST['emp_name'];
	 $salary_date = $_POST['salary_date'];
	 $mode_of_salary = $_POST['mode_of_salary'];


	 $sql = "INSERT INTO employee_mode_salary_details(emp_name,salary_date,mode_of_salary)
	 VALUES ('$emp_name','$salary_date','$mode_of_salary')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:employee_mode_salary_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>