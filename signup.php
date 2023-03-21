<?php
    include 'connections.php';
    include('sessions.php');
?>

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
        <h1>Sign Up</h1>
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" placeholder="Enter email">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <label for="password">Confirm Password</label>
        <br>
        <input type="password" name="password2" placeholder="Confirm Password">
        <br>
        <label for="usertype">User Type</label>
        <br>
        <select name="usertype" id="usertype">
            <option value="Student">Student</option>
            <option value="Employer">Employer</option>
        </select>
        <br>
        <input type="submit" name="register" value="Sign Up">

        <?php
            
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $name = $_POST['name']; 
                $email = $_POST['email'];   
                $password = $_POST['password']; 
                $usertype = $_POST['usertype'];      
                $tablename="users";
                $columnquery="*";
 
               
                
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);



                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        
                        echo "Account Exist";
                    }
                  } else {
<<<<<<< HEAD
                    $dataquery = "users(username,name,email,password,usertype)";
                    $valuequery="('$username','$name','$email','$password','$usertype')";
                    insertData($conn,$dataquery,$valuequery);
                    if($usertype == 'Student'){
                        header('Location: student/student-register.php');
                    }
                    elseif($usertype == 'Employer'){
                        header('Location: employer/employer-register.php');
                    }  
=======
                    // insert codes here
>>>>>>> main
                  }
            }
        ?>

    </form>

    <br>
    <p>Already have an account?<a href="login.php">Log In</a></p>
</body>
</html>