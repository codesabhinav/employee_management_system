<?php
include 'dbmanagment.php';
if(isset($_POST['save']))
{	 
	 $emp_name = $_POST['emp_name'];
	 $emp_department = $_POST['emp_department'];
	 $salary_date = $_POST['salary_date'];
	 $amount = $_POST['amount'];


	 $sql = "INSERT INTO employee_salary_details(emp_name,emp_department,salary_date,amount)
	 VALUES ('$emp_name','$emp_department','$salary_date','$amount')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:employee_salary_view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>