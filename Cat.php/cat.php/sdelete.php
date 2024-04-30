<?php 
include"connection.php";
if (isset($_GET['studentID'])) {
	$sql = $connection->query("DELETE FROM students WHERE studentID = '$_GET[studentID]'");
	if($sql){
		
		header("location:studentview.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>