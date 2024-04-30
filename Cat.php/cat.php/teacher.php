
    <?php
   //< !-- My Name is TWAHIRWA Enock REG NO:222014403-->
  include"connection.php";

    // Insert section
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        

        $statement = mysqli_query($connection,"INSERT INTO teachers(Firstname,Lastname,Email,Phone,Department) VALUES('$fname','$lname','$email','$phone','$department')");
        if ($statement) {
            echo "New  record has been added successfully.";
                 header("location:teacherview.php");
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $statement->close();
        $connection->close();
    }
    ?>