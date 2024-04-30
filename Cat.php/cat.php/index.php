<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" title="sytle1" media="tv,projection,handheld,screen,print">
    <!-- Internal CSS -->
    <style>
        .logout-link {
            position: absolute;
            top: 15px; 
            right: 20px; 
            color: beige;
            cursor: pointer;  
        }
    </style>
</head>
<body>
    <div>
        <!-- Header Section -->
        <header>
            <nav>
                <ul>    
                    <!-- Navigation Links -->
                    <li><a href="index.php">Home</a></li>      
                    <li><a href="#">Employee</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Sites</a></li>
                    <li><a href="#">Orientation session</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#" class="logout-link">Logout</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <!-- Main Content Section -->
    <div>
        <section id="home">
            <h1>Welcome to Nursery Management System</h1>
            <p>This is our webpage developed to help users manage nursery activities efficiently. If you are new here or want to use our system, enjoy.</p>
        </section>

        <section class="s">
            <h2>Welcome to Our Nursery</h2>
            <p>Happy to have you with us. Are you ready to manage your nursery?
                <a href="#" id="login-link"><input type="button" value="Login"></a> 
                &nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" id="register-link"><input type="button"
