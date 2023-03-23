<?php
    include ('../../connections.php');
    include('../../sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../header-link.php'; ?>
    <link rel="stylesheet" href="assets/CSS/styles.css">
    <link rel="stylesheet" href="assets/CSS/login-bg.css">
    <title>Sign Up</title>
</head>
<body>

<div class="container">
    <br> <br>

    <div class="row">
      <div class="col-4 ">
        <div class="container-fluid mt-5 mr-5 pb-4 shadow rounded">
          <div class="row">
            <div class="col-12 mx-auto text-center mt-3" style="height: 150px;">
            <?php
              $id = $_SESSION['id'];
                $result = selectWhere($conn,"student_profile","*", "id", $id );
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) { 
                    $row = mysqli_fetch_assoc($result);
                    $fullname = $row['firstname'] . ' ' . $row['lastname']; 
                    ?>
                
              <img src="" alt="img" class="rounded-circle" height="100%">
            </div>
            <div class="col-12 mt-3">
              <p class="text-center fs-3"><?php $fullname ?></p>
            </div>
            <div class="col-6">
              <p>Bio</p>
            </div>
            <div class="col-12 mt-0 d-flex justify-content-evenly text-sm-start">
              <p class="fs-6 d-flex justify-content-evenly text-md-start"><?php $row['bio'] ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <!-- replace paragraph with list or add new list then put this for loop -->
              <p class="fs-5"></p>
            </div>
            <div class="col-3 m-2">
              <p> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col mt-5 ms-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 pt-3 shadow rounded">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <p class="fs-1 bold">Basic Information</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <p class="fs-4">Course</p>
                    <p><?php $row['course']; ?></p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="fs-4">Email Address</p>
                        <p><?php $row['email']; ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p class="fs-4">Birthdate</p>
                        <p><?php $row['birthdate']; ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p class="fs-4">Sex</p>
                        <p><?php $row['sex']; ?></p>
                    </div>
                </div>

              </div>
            </div>
            </div>

            <?php 
            }
                ?>
            <div class="row">
                <div class="col-12 mt-5 shadow rounded">
                <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <p class="fs-1 bold">Pending Applications</p>
                  </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Job Title</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Welder</td>
                        <td>Welder Inc.</td>
                        <td>Accepted</td>
                      </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    </div>
</div>

</body>
</html>

