<html>
<meta charset="UTF-8">
<?php
    include('../../header-link.php');
?>

<style>
  body {
    font-family: 'Hammersmith One', sans-serif;
    color:black;
  }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: linear-gradient(to left, #F6C724, #7C2424);">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="../dashboard/index.php">
            <img src="../../assets\img\jobportal_logo1.png" width="275px" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mx-auto ">
                        <li class="nav-item mx-3">

                <a class="nav-link fs-5 fw-bold text-white" href="../dashboard/dashboard.php">Logs</a>
              </li>
              <li class="nav-item mx-3">
            <li class="nav-item mx-3">

                <a class="nav-link fs-5 fw-bold text-white" href="../user-listing/u.listing.php">User Listing</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link fs-5 fw-bold text-white" href="../student-profile/s.profile.php">Student Profile</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link fs-5 fw-bold text-white" href="../application-list/a.list.php">Application Listing</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link fs-5 fw-bold text-white" href="../company-listing/c.listing.php">Company Listing</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link fs-5 fw-bold text-white" href="../job-listing/j.listing.php">Job Listing</a>
              </li>
            </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class="nav-link fs-17 fw-bold" href="../../logout.php">Sign Out</a></li>
      </ul>
  </div>
</div>
</nav>
</body>
</html>
