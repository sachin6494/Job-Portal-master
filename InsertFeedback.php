<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>

<body>
	<?php
	$FeedBack = $_POST['txtFeedback'];
	$FDate = date('y/m/d');
	// $Id = $_SESSION['ID'];
	$Id = 3;

	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "root", "Sachin@123", "portal");

	// Specify the query to Insert Record
	$sql = "insert into feedback(JobSeekId,Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	print_r($sql);
	// execute query
	if (mysqli_query($con, $sql)) {
		echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'index.php\';</script>';
	}
	mysqli_close($con);

	// Close The Connection

	?>
</body>

</html>