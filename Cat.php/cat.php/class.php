
<?php
include"connection.php";
// Handling POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $class = $_POST['className'];
    $teacherID = $_POST['teacherID'];
    // Preparing SQL query
   $statement = mysqli_query($connection,"INSERT INTO class(className,teacherID) VALUES('$class','$teacherID')");
        if ($statement) {
            echo "New  record has been added successfully.";
                 header("location:classview.php");
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $statement->close();
    }
        $connection->close();
?>
