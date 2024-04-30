<?php 
include"connection.php";
if (isset($_GET['Id'])) {
	$sql = $connection->query("DELETE FROM users WHERE id = '$_GET[Id]'");
	if($sql){
		
		header("location:userview.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>