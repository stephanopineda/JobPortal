<?php
    include 'connections.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log In</title>
</head>

<body>

    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Log In">

        <?php
            
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];    
                $tablename="admin_accounts";
                $columnquery="*";
                
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Account Exist";
                    }
                  } else {
                    echo "0 results";
                  }
            }
        ?>

    </form>

    <br>
    <p>No account yet?<a href="signup.php"> Sign Up</a></p>
</body>
</html>