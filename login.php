<?php
    include 'connections.php';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header-link.php'; ?>
    <link rel="stylesheet" href="assets/CSS/styles.css">
    <title>Job Portal</title>
</head>

<body>

    <form action="login.php" method="post">
        <h1>Job Portal</h1>
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <input type="submit" name="submit" value="Submit">


    </form>

    <br>

    <p>No account yet? <a href="signup.php">Sign Up</a></p>

    <br>
    <!-- temporary -->
    <p>Login admin account <a href="admin/index.php">here</a></p>
</body>
</html>