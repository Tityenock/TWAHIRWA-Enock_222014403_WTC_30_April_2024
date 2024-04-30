
<?php 
include"connection.php";
if (isset($_POST['submit'])) {
$id = $_GET['studentID'];
$fname = $_POST['Firstname'];
$lname=$_POST['Lastname'];
$DateOFBirth = $_POST['DateOFBirth'];
$teacherID= $_POST['teacherID'];

$update =$connection->query("UPDATE students SET Firstname = '$fname',Lastname = '$lname',DateOFBirth = '$DateOFBirth',teacherID = '$teacherID' WHERE studentID = '$id'");

    if ($update) {
    	echo '<script>alert(" student info has been updated")</script>';
        header("location:studentview.php");
    }else{
        echo "error".mysql_error($connection);
    }
}
if (isset($_GET['studentID'])) {
  $id = $_GET['studentID'];
$select = $connection->query("SELECT * FROM students WHERE studentID= $id");
$row = mysqli_fetch_array($select);
}
 ?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update</title>
<link rel="stylesheet" type="text/css" href="style.css" title="sytle1" media="tv,projection,handheld,screen,print">
     
<div>
    <form method="POST" action="">
        <h3> teacher Update Form </h3>
        <br>
    <input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    
    <input type="text" class="f " name="Firstname" value="<?php echo $row['Firstname']; ?>"style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="text" class="f " name="Lastname" value="<?php echo $row['Lastname']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="date" class="f " name="DateOFBirth" value="<?php echo $row['DateOFBirth']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="number" class="f " name="teacherID" value="<?php echo $row['teacherID']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <!-- Repeat this for each field you want to update -->
    <input type="submit" name="submit" value="Update" style=" width: 10%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      background-color: lightseagreen;
      color: white;
      border-color: orange;
      ">
</form>
</div>
  <footer>
  <center> 
    <b><h2>UR CBE BIT &copy, 2024 &reg, Designed by: @Enock TWAHIRWA</h2></b>
  </center>
</footer>
</body>	
</html>
