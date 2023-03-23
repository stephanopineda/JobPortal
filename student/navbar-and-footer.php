
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\CSS\styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <title>PUP Job Portal</title>
</head>

<body>
    <!--Header-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #800;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="index.html">
        <img src="assets/jobportal_logo1.png" height="100px" width="275px"  class="d-inline-block align-text-top">
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mx-auto">
          
          <li class="nav-item">
            <a class="nav-link fs-3 fw-bold" href="index.html">Home</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link  fs-3 fw-bold " href="company-profiles.html">Company Profiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 fw-bold " href="find-job.php">Find A Job</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row-reverse">
          <div class="dropdown">
            <a class="btn stud-btn2 dropdown-toggle text-center" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets\img\no-profile.png" alt="" class="rounded-circle" height="40px">
            </a>
          
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="student-profile.html">Profile</a></li>
              <li><a class="dropdown-item" href="edit-profile.html">Account Settings</a></li>
              <li><a class="dropdown-item" href="landing-page.html">Logout</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav>

    <!--Footer-->

    
  <div class="container-fluid mt-5 footer border" style="border: 1px solid; background-color: #800;">
    <div class="row">
      <div class="col-2 my-auto text-center">
        <img src="../views/assets/Job-Portal-icon.png" alt="img" height="20%" width="65%">
      </div>
      <div class="col-4 mt-2">
        <ul class="list-unstyled">
          <li class="">
            <p class="footer-toc fw-bold" style=" margin-top: 25px;color:aliceblue;">Table of Contents</p>
          </li>
          <li class="">
            <a class="fw-bold" href="#">Home </a>
          </li>
          <li class="">
            <a class="fw-bold" href="#">Find A Job</a>
          </li>
          <li class="">
            <a class="fw-bold" href="#">My Profile</a>
          </li>
          <li class="">
            <a class="fw-bold" href="#">Company Profiles</a>
          </li>
          <li class="">
            <a class="fw-bold" href="#">About Us</a>
          </li>
        </ul>
      </div>
      <div class="col-4 footer-two">
        <ul class="list-unstyled">
          <li class="">
            <p class="footer-toc "> </p>
          </li>
          <li class="">
            <a class="fw-bold"style=" margin-top: 25px; color:aliceblue;" href="https://www.facebook.com/pupcareer/">Career Guides</a>   
            <h6 style= "color:aliceblue;"> Learn more to help you in starting your career journey!</h6>
          </li>
        </ul>
      </div>
      <div class="col mt-auto ml-auto footer-cpw">
        <p style="color:aliceblue;">Job Portal Solutions © 2023 Grp 2 & 10</p>
        <p style="color:aliceblue;">All rights reserved.</p>
      </div>
    </div>

  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
crossorigin="anonymous"></script>