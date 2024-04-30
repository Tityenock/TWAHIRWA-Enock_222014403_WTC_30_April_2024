
<?php 
include"connection.php";
if (isset($_POST['submit'])) {
$id = $_GET['teacherID'];
$fname = $_POST['Firstname'];
$stime=$_POST['Lastname'];
$email = $_POST['Email'];
$phone= $_POST['Phone'];
$dpt = $_POST['Department'];
$update =$connection->query("UPDATE teachers SET Firstname = '$fname',Lastname = '$lname',Email = '$email',Phone = '$phone',Department = '$dpt' WHERE teacherID = '$id'");

    if ($update) {
    	echo '<script>alert("teacher info has been updated")</script>';
        header("location:teacherview.php");
    }else{
        echo "error".mysql_error($connection);
    }
}
if (isset($_GET['teacherID'])) {
  $id = $_GET['teacherID'];
$select = $connection->query("SELECT * FROM teachers WHERE teacherID= $id");
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
      <style>
        span{
            color: tomato;
            font-size: 25pt !important;
        }
        h2{
            color: white;
            font-size: 30pt !important;
        }
        h1{
            text-align: center;
            margin-top: 2rem;
            color: gray;
            font-weight: bold;
            
        }
        body{
            background-color: gray;
        }
        form{
            background-color: beige;
            border-radius: 8px;
            border-style: double;
            box-shadow: 12px 2px 21px 15px;
        }
        h3{
            font-weight: bold !important;
            font-family: century gothic !important;
            margin-top: 2rem;
        }
        
        input[type='text'],
        input[type='password'],select{
            display: inline-block;
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 2px solid darkred;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .input-wraper{
            position: relative;
        }
        .input-wraper i{
            position: absolute;
            display: inline-block;
            right: 10px;
            top: 19px;
            transform: translateY(-50%);
        }
        p a{
            font-family: century gothic;
            color: maroon;
            font-weight: bolder;
        }
      </style>

</head>
<body>
<div>
    <form method="POST" action="">
        <h3> teacher Update Form </h3>
        <br>
    <input type="hidden" name="teacherID" value="<?php echo $row['teacherID']; ?>" style=" width: 40%;
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
    <input type="text" class="f " name="Email" value="<?php echo $row['Email']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="text" class="f " name="Phone" value="<?php echo $row['Phone']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="text" class="f " name="Department" value="<?php echo $row['Department']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;"><br>
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
