<?php 
include"connection.php";
if (isset($_GET['attendanceID'])) {
	$sql = $connection->query("DELETE FROM attendances WHERE   attendanceID = '$_GET[attendanceID]'");
	if($sql){
		
		header("location:attendanceview.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>