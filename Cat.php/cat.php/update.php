<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Linking to external stylesheet -->
  <link rel="stylesheet" type="text/css" href="style.css" title="style 1" media="screen, tv, projection, handheld, print"/>
  <!-- Defining character encoding -->
  <meta charset="utf-8">
  <!-- Setting viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>attendance-update Page</title>
  <style>
    /* Normal link */
    a {
      padding: 10px;
      color: darkblue;
      background-color: pink;
      text-decoration: none;
      margin-right: 15px;
    }

    /* Visited link */
    a:visited {
      color: purple;
    }
    /* Unvisited link */
    a:link {
      color: brown; /* Changed to lowercase */
    }
    /* Hover effect */
    a:hover {
      background-color: dark;
    }

    /* Active link */
    a:active {
      background-color: red;
    }

    /* Extend margin left for search button */
    button.btn {
      margin-left: 15px; /* Adjust this value as needed */
      margin-top: 4px;
    }
    /* Extend margin left for search button */
    input.form-control {
      margin-left: 1300px; /* Adjust this value as needed */

      padding: 8px;
     
    }
  </style>
  
<header>
   

</head>

<body style="background-image: url('./Images/stock.avif');">
  <form class="d-flex" role="search" action="search.php">
    
    </form>
  <ul style="list-style-type: none; padding: 0;">
    
    <li style="display: inline; margin-right: 10px;"><a href="Home.html">HOME</a>
  </li>
    <li style="display: inline; margin-right: 10px;"><a href="./about.html">ABOUT</a>
  </li>
    <li style="display: inline; margin-right: 10px;"><a href="./contact.html">CONTACT</a>
  </li>
   <li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="#" style="padding: 10px; color: white; background-color: burlywood; text-decoration: none; margin-right: 15px;">Nursary Management System</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="studentview.php">student</a>
        <a href="teacherview.php">teacher</a>
        <a href="attendanceview.php">attendance</a>
        <a href="classview.php">class</a>
        <a href="userview.php">users</a>
        

      </div>
    </li>
 
   
    
    <li class="dropdown" style="display: inline; margin-right: 10px;">
      <a href="#" style="padding: 10px; color: white; background-color: skyblue; text-decoration: none; margin-right: 15px;">Settings</a>
      <div class="dropdown-contents">
        <!-- Links inside the dropdown menu -->
        <a href="login.html">Login</a>
        <a href="register.html">Register</a>
        <a href="logout.php">Logout</a>
        <a href="search.html">search</a>

      </div>
    </li><br><br>
    
    
    
  </ul>

</header>
<section style=" color: orange;">
  <marquee><h1 style="color: brown;">WELCOME TO OUR WEBSITE OF nursery management SYSTEM </h1></marquee>

</section>
<?php 
include"connection.php";
if (isset($_POST['submit'])) {
$attendanceID = $_GET['attendanceID'];
$studentID = $_POST['studentID'];
$status=$_POST['status'];

$update =$connection->query("UPDATE attendances SET  studentID  = '$studentID',status = '$status' WHERE attendanceID = '$attendanceID'");

    if ($update) {
    	echo '<script>alert(" class info has been updated")</script>';
        header("location:attendanceview.php");
    }else{
        echo "error".mysql_error($connection);
    }
}
if (isset($_GET['attendanceID'])) {
  $attendanceID = $_GET['attendanceID'];
$select = $connection->query("SELECT * FROM attendances WHERE   attendanceID= $attendanceID");
$row = mysqli_fetch_array($select);
}
 ?>
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
        input[type='status'],select{
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
        <h3>attendance Update Form </h3>
        <br>
    <input type="hidden" name="attendanceID" value="<?php echo $row['attendanceID']; ?>" style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    
    <input type="number" class="f " name="studentID" value="<?php echo $row['studentID']; ?>"style=" width: 40%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid;#ccc;
      border-radius: 5px;
      box-sizing: border-box;">
    <br>
    <input type="text" class="f " name="status" value="<?php echo $row['status']; ?>" style=" width: 40%;
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
      border: 1px solid#ccc;
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
