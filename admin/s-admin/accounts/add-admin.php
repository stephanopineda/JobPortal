<?php
    include '../../../connections.php';
    include('../sessions.php');
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

    <form method="POST">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="password2" placeholder="Confirm Password"><br>
        <input list="browsers" name="browser" id="browser" placeholder="Admin Type"><br><br>

        <datalist id="browsers">
            <option value="Admin">
            <option value="Superadmin">
        </datalist>
        <input type="submit" name="register" value="Sign Up">

        <?php
            
            if(isset($_POST['register'])){
                $name = $_POST['name'];    
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password']; 
                $admintype = $_POST['browser'];      
                $tablename="admin_accounts";
                $columnquery="*";
                
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Account Exist";
                    }
                  } else {

                    // Insert Data
                    $dataquery = "admin_accounts(username,name,email,password,admin_type)";
                    $valuequery="('$username','$name','$email','$password','$admintype')";
                    insertData($conn,$dataquery,$valuequery);
                    header('Location: admin-accounts.php');
                  }
            }
        ?>

    </form>

</body>
</html>