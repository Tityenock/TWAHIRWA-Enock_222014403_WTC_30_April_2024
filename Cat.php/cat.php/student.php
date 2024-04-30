
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nursery Management System</title>
</head>

<body>
    <h1>Nursery Management System</h1>
    <form method="post" action="">
        <label for="child_name">First Name:</label><br>
        <input type="text" name="fname" required/><br><br>

        <label for="parent_name">Last Name:</label><br>
        <input type="text" name="lname" required/><br><br>
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required/><br><br>
         <label for="contact_number">Teacher ID:</label><br>
        <input type="text"  name="tid" required/><br><br>
     
        <input type="submit" name="submit" value="Add student"/><br>
    </form>

        <?php
  include"connection.php";

    // Insert section
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $tid = $_POST['tid'];

        $statement = mysqli_query($connection,"INSERT INTO students(Firstname,Lastname,DateOfBirth,teacherID) VALUES('$fname','$lname','$dob','$tid')");
        if ($statement) {
            echo "New  record has been added successfully.";
                 header("location:studentview.php");
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $statement->close();
        $connection->close();
    }
    ?>
</body>

</html>
