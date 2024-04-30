<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nursery Management System</title>
  <style>
    /* Add your CSS styles here */
    form {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="password"], input[type="date"], input[type="number"], select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<h2>Nursery Management System</h2>

<form action="process_all.php" method="post">
  <!-- User Form -->
  <h3>User Form</h3>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  
  <!-- Class Form -->
  <h3>Class Form</h3>
  <label for="class_name">Class Name:</label>
  <input type="text" id="class_name" name="class_name" required>
  
  <!-- Attendance Form -->
  <h3>Attendance Form</h3>
  <label for="student_id">Student ID:</label>
  <input type="text" id="student_id" name="student_id" required>
  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required>
  
  <!-- Teacher Form -->
  <h3>Teacher Form</h3>
  <label for="teacher_name">Teacher Name:</label>
  <input type="text" id="teacher_name" name="teacher_name" required>
  
  <!-- Student Form -->
  <h3>Student Form</h3>
  <label for="student_name">Student Name:</label>
  <input type="text" id="student_name" name="student_name" required>
  <label for="age">Age:</label>
  <input type="number" id="age" name="age" required>
  
  <!-- Submit Button -->
  <input type="submit" value="Submit All Information">
</form>

</body>
</html>
