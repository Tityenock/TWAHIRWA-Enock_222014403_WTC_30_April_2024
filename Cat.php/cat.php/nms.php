<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Linking to external stylesheet -->
  <link rel="stylesheet" type="text/css" href="style.css" title="style 1" media="screen, tv, projection, handheld, print"/>
  <!-- Defining character encoding -->
  <meta charset="utf-8">
  <!-- Setting viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
  <style>
    /* Normal link */
    a {
      padding: 10px;
      color: darkblue;
      background-color: burlywood;
      text-decoration: none;
      margin-right: 15px;
    }
body{
    background-color: beige;
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
 <li style="display: inline; margin-right: 10px;"><a href="./studreport.php">Student report</a>
  </li>
   <li style="display: inline; margin-right: 10px;"><a href="./nms.php">NMS Report</a>
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
<?php
include"connection.php";
$sql = "SELECT students.Firstname,students.Lastname, students.DateOFBirth, attendances.status,class.className,teachers.Firstname, teachers.Lastname, 
teachers.Department,teachers.Email,teachers.Phone FROM students  INNER JOIN attendances ON students.studentID AND students.teacherID INNER JOIN teachers ON teachers.teacherID AND  teachers.teacherID INNER JOIN  class ON class.teacherID";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1' width='1200'>";
    echo "<tr bgcolor='skybule'><th> First Name</th><th>Last Name</th><th>Date of Birth</th><th>status</th><th>class Name</th><th>Teacher_Firstname</th><th>Teacher_lastname</th><th>Department</th><th>Email
    </th><th>Phone Number</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Firstname'] . "</td>";
        echo "<td>" . $row['Lastname'] . "</td>";
        echo "<td>" . $row['DateOFBirth'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['className'] . "</td>";
        echo "<td>" . $row['Firstname'] . "</td>";
        echo "<td>" . $row['Lastname'] . "</td>";
        echo "<td>" . $row['Department'] . "</td>";
         echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "No records found";
}

$connection->close();
?>
</body>
</html>
