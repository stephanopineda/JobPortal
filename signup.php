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
        <input list="browsers" name="browser" id="browser" placeholder="User Type">

        <datalist id="browsers">
            <option value="Student">
            <option value="Employer">
        </datalist>
        <input type="submit" name="register" value="Sign Up">

        <?php
            
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $name = $_POST['name'];    
                $password = $_POST['password']; 
                $usertype = $_POST['browser'];      
                $tablename="admin_accounts";
                $columnquery="*";
                
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Account Exist";
                    }
                  } else {
                    // insert codes here   
                  }
            }
        ?>

    </form>

    <br>
    <p>Already have an account?<a href="login.php">Log In</a></p>
</body>
</html>