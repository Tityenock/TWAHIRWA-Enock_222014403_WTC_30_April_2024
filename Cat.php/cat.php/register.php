   <?php
  include"connection.php";
    // Insert section
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $role = $_POST['role'];
        
        

        $statement = mysqli_query($connection,"INSERT INTO users(username,password,role) VALUES('$username','$password','$role')");
        if ($statement) {
            echo "New  record has been added successfully.";
                 header("location:userview.php");
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $statement->close();
        $connection->close();
    }
    ?>