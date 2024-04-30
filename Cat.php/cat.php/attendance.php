<?php
//<!-- My Name is TWAHIRWA Enock REG NO:222014403-->
// Connection details
include"connection.php";
// Handling POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data  
    $std = $_POST['studentID'];
    $status = $_POST['status'];
    // Preparing SQL query
    $statement = mysqli_query($connection,"INSERT INTO attendances(studentID,status) VALUES('$std','$status')");
        if ($statement) {
            echo "New  record has been added successfully.";
                 header("location:attendanceview.php");
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $statement->close();
    }
        $connection->close();
?>
