<html>
<meta charset="UTF-8">
<?php
    include('../../header-link.php');
?>
    <style>
  
  nav a {
    color: black;
    font-size: 18px;
  }

  body {
    font-family: 'Hammersmith One', sans-serif;
    color:black;
  }


  .image-container1 {
    width: 300px; 
    height: 300px; 
    overflow: hidden; 
    float: left; 
    margin-right: 30px;
  }

  .image-container1 img {
    width: 100%; 
  }

.text-container1 {
  overflow: hidden;
}

.image-container2 {
    width: 300px; 
    height: 300px; 
    overflow: hidden; 
    float: right; 
    margin-left: 30px;
  }

  .image-container2 img {
    width: 100%; 
  }

.text-container2 {
  overflow: hidden;
  text-align: right;
}

.text1{
  font-size: 30px;
}

.text2{
  font-size: 20px;
  font-family: 'Signika', sans-serif;
}

.text3{
  font-size:30px;
}

.text4{
  font-size: 20px;
  font-family: 'Signika', sans-serif;
}

.image{
  border: 0.5px solid rgba(0, 0, 0, 0.408)
}

.container-fluid {
  background-color: #FFDD6C;
  
}

.list-unstyled a{
    color: black;
}
.list-unstyled a:hover{
    color: #800;
}

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFDD6C; font-size: 17px;">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="company-home.html">
            <img src="../../assets/img/jobportal_logo3.png" width="210px" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item mx-2">
                <a class="nav-link active" href="../dashboard/index.php">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="../profile/index.php">Profile</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="../jobs/index.php">Jobs</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Candidates</a>
              </li>
            </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class="nav-link" href="../logout.php">Sign Out</a></li>
      </ul>

  </div>
</div>
</nav>
</body>


</html>
