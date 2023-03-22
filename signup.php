<?php
    include ('connections.php');
    include('sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header-link.php'; ?>
    <link rel="stylesheet" href="assets/CSS/styles.css">
    <link rel="stylesheet" href="assets/CSS/login-bg.css">
    <title>Sign Up</title>
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-8 mx-auto mt-5">
        <div id="LogInCon" class="container-sm mt-5 py-5 p-5 bg-light login-form">
          <form method="POST" enctype="multipart/form-data" onsubmit="">
            <h2>Sign Up</h2>
            <br>
            <div class="form-group">
              <label class="form-group" for="username">Username </label>
              <input class="form-control" type="text" name="username" placeholder="Enter username" required="">
            </div>
            <br>

            <div class="row">
              <div class="col">
                <label class= "mb-2" for="First-name">First Name</label>
                <input class="form-control" type="text" name="fname" placeholder="Enter first name" required="">
              </div>
              <br>
              
              <div class="col">
                <label class= "mb-2" for="Last-name">Last Name</label>
                <input class="form-control" type="text" name="Lname" placeholder="Enter first name" required="">
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col">
                <label  for="password">Password</label>
                <input  class="form-control" type="password" name="password" placeholder="Enter password" >
              </div>

              <div class="col">
                <label  for="Cpassword">Confirm Password</label>
                <input  class="form-control" type="password" name="password2" placeholder="Confirm password" >
              </div>
            </div>
            <br>
            <div class="form-group">
        <label for="email">Email</label>
        <br>
        <input class="form-control" type="email" name="email" placeholder="Enter email">
        <br>
        </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="usertype" id="student">
              <label class="form-check-label" for="student">
              Student
            </div>  
              <br>
            <div class="form-check">  
              <input class="form-check-input" type="radio" name="usertype" id="employer">
              <label class="form-check-label" for="employer">
              Employer
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
          <p>Already have an account?<a href="login.php"> Log In</a></p>
        </div>
      </div>
    </div>

  </div>



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
                    $dataquery = "users(username,name,email,password,usertype)";
                    $valuequery="('$username','$name','$email','$password','$usertype')";
                    insertData($conn,$dataquery,$valuequery);
                    if($usertype == 'Student'){
                        header('Location: student/student-register.php');
                    }
                    elseif($usertype == 'Employer'){
                        header('Location: employer/employer-register.php');
                    }  
                  }
            }
        ?>

    </form>


</body>
</html>