<?php
include"connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT  username ,password FROM users WHERE username =?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify the hashed password
        if (password_verify($password, $row['password'])) {
            header("Location:HOME.HTML");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }

    // Close prepared statement
    $stmt->close();
}

$connection->close();
?>
