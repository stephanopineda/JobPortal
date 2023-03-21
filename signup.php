<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    
    <form action="signup.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="name" placeholder="Name">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password2" placeholder="Confirm Password">
        <input list="browsers" name="usertype" id="usertype" placeholder="User Type">

        <datalist id="usertype">
            <option value="Student">
            <option value="Employer">
        </datalist>
        <input type="submit" name="submit" value="Sign Up">
    </form>
    <br>
    <p>Already have an account?<a href="login.php">Log In</a></p>
</body>
</html>