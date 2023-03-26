<?php
    include ('connections.php');
    include ('sessions.php');
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

<section class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container py-5 pt-1 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10 ">
            <div class="card" style="border-radius: 1.5rem;">
              <div class="row g-0">
                <div class="col-md-12 col-lg-12 px-5 d-flex align-items-center">
                  <div class="card-body p-4 text-black">

                      <form method="POST" enctype="multipart/form-data" onsubmit="">
                        <h2>Sign Up</h2>
                        <br>
                        <div class="form-group">
                          <label class="form-label" for="username">Username </label>
                          <input class="form-control" type="text" name="username" placeholder="Enter username" required="">
                        </div>
                        <div id="usernameerrormsg">


                        </div>
                        <br>

                        <div class="row">
                          <div class="col">
                            <label class="form-label mb-2 fw-bold" for="password">Password</label>
                            <input  class="form-control" type="password" name="password" placeholder="Enter password" >
                          </div>

                          <div class="col">
                            <label  class="form-label mb-2 fw-bold" for="Cpassword">Confirm Password</label>
                            <input  class="form-control" type="password" name="password2" placeholder="Confirm password" >
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div id="passworderrormsg">

                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form-group">
                    <label class="form-label mb-2 fw-bold" for="email">Email</label>
                    <br>
                    <input class="form-control" type="email" name="email" placeholder="Enter email">
                    
                    </div>
                    <div id="emailerrormsg">

                    </div><br>
                        <label for="user_type" class="form-label mb-2 fw-bold">Role</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="usertype" id="usertype" value ="Student">
                          <label class="form-check-label" for="student">
                          Student
                        </div>  
                          <br>
                        <div class="form-check">  
                          <input class="form-check-input" type="radio" name="usertype" id="usertype" value = "Employer">
                          <label class="form-check-label" for="employer">
                          Employer
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="register">Sign Up</button>
                      </form>
                      <br>  
                      <p>Already have an account?<a href="login.php"> Log In</a></p>
        </div>
      </div>
    </div>

  </div>



        <?php
            
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $password1 = $_POST['password']; 
                $password2 = $_POST['password2']; 
                $email = $_POST['email'];   
                $usertype = $_POST['usertype'];      
                $tablename="admin_accounts";
                $columnquery="*";
                

                            
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);

                $eresult = selectWhere($conn, $tablename, $columnquery, 'email', $email);



                if ($result->num_rows > 0) {
 
                      echo "<script>
                      document.getElementById('usernameerrormsg').innerHTML = 'Username Taken.';
                    </script>";

                  } 
                  if ($eresult->num_rows > 0) {
    
                      echo "<script>
                      document.getElementById('emailerrormsg').innerHTML = 'Email Taken.';
                    </script>";
                  }
                  if($password1 != $password2){
                    echo "<script>
                      document.getElementById('passworderrormsg').innerHTML = 'Password does not match.';
                    </script>";
                  }

                  if ($result->num_rows <= 0 && $eresult->num_rows <= 0 && $password1 == $password2) {
                    $dataquery = "users(username,email,password,usertype)";
                    $valuequery="('$username','$email','$password1','$usertype')";

                    insertData($conn,$dataquery,$valuequery);
                    $_SESSION['username']=$username;
                    $_SESSION['user_type']=$usertype;
                    // echo "Account Created";
                    if($usertype == "Student"){
                      // header("Location: student.php");
                      echo '<script>
                        window.location.href = "student/student-register.php";
                      </script>';
                    }
                    else if($usertype == "Employer"){
                      echo '<script>
                        window.location.href = "employer/employer-register.php";
                      </script>';
                    }
                    else{
                      echo "Error";
                    }
                  }
            }
          
         
        ?>

    </form>

  </div>
</div>
</div>
</div>
</div>
</section>


</body>
</html>