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
    <link rel="stylesheet" href="assets/CSS/loginBg.css">
    <title>Job Portal</title>
    
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
    
                    <form method="post">
    
                      <div class=" d-flex justify-content-center align-items-center form-control-lg mb-3 pb-1 ">
                        <img src="assets/img/jobportal_logo3.png"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
    
                      <h4 class="text-center fw-bold mb-3 pb-3 " style="letter-spacing: 1px;">Welcome back! Good to see you again!</h4>
    
                      <div class="form-outline mb-4">
                      <label class="form-label fw-bold" for="username">Username </label>  
                      <input type="text" name="username" id="form2Example17" class="form-control form-control-lg" />
                        
                      </div>
    
                      <div class="form-outline mb-4">
                        <label class="form-label fw-bold" for="password">Password</label>
                        <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                      </div>
    
                      <div class=" text-center pt-1 mb-4">
                        <button class=" fw-bold btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
                        
                      </div>
    
                      <p class=" text-center mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php"
                          style="color: #393f81;">Register here!</a></p>
                      <br>
                      <p><a href="admin/index.php">Admin</a></p>
                    </form>

                    <?php
                    if(isset($_POST['submit'])){
                      $username = $_POST['username'];
                      $password = $_POST['password'];
        
                      $query = "SELECT * FROM `users` WHERE `username` = '$username'";
                      $result = mysqli_query($conn, $query);
                      $row = mysqli_fetch_assoc($result);
                      if($row['username'] == $username && $row['password'] == $password){
                
                        if($row['userType'] == 'Student'){
                          echo '<script>
                          window.location.href = "student/dashboard/index.php";
                        </script>';
                        }
                        else if($row['userType'] == 'Employer'){
                          echo '<script>
                          window.location.href = "employer/dashboard/index.php";
                        </script>';
                        }
                        else{
                          echo '<script>
                          window.location.href = "index.php";
                        </script>';
                        }
                      }else{
                        echo "<script>alert('Invalid Email or Password')</script>";
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</body>
</html>