<?php
include"connection.php";
if (isset($_GET['classID'])) {
	$sql = $connection->query("DELETE FROM class WHERE classID = '$_GET[classID]'");
	if($sql){
		
		header("location:classview.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>