<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>

<body>
	<?php

	$txtTitle = $_POST['txtTitle'];
	$txtTotal = $_POST['txtTotal'];
	$cmbQual = $_POST['cmbQual'];
	$txtDesc = $_POST['txtDesc'];
	$Name = $_POST['txtName'];
	if ($cmbQual == "Other") {
		$cmbQual = $_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "root", "Sachin@123", "portal");

	// Specify the query to Insert Record
	$sql = "insert into job_master (CompanyName,JobTitle,Vacancy,MinQualification,Description) values('" . $Name . "','" . $txtTitle . "','" . $txtTotal . "','" . $cmbQual . "','" . $txtDesc . "')";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("Job Inserted Succesfully");window.location=\'ManageJob.php\';</script>';

	?>
</body>

</html>