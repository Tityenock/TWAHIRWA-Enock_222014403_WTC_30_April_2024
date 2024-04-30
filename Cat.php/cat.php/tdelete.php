<?php
include"connection.php";
if (isset($_GET['teacherID'])) {
	$sql = $connection->query("DELETE FROM teachers WHERE teacherID = '$_GET[teacherID]'");
	if($sql){
		
		header("location:teacherview.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>