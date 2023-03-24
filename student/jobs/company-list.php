<!DOCTYPE html>

<?php
 include('../../connections.php');
 include('../sessions.php');

$results_per_page = 20;


if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}


$page_first_result = ($page - 1) * $results_per_page;



?>

<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../header-link.php'); ?>
    <link rel="stylesheet" href="../../assets/CSS/styles.css">
    <title>Company Profile</title>
</head>


<body>

<?php
include '../navbar.php';
?>


  <div class="container justify-content-center mt-50 mb-50">
    <div class="row justify-content-center">
      <div class="col-10 center">
        <div class="card card-body">
          <div class="container">

            <div class="row ">
              <div class="col align-middle" style="padding-top: 10px">
                <h1 class="text-left">Company List</h1>
              </div>
              <div class="col" style="padding-left: 300px; padding-top: 15px;">

                <form class="form-inline" action="company-list.php" method="GET">

                  <div class="form-outline">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Search here.." />
                  </div>

                  <div style="padding-left:10px;">
                    <button type="submit" class="btn btn-danger">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <?php

            if (isset($_GET['search']) && !empty($_GET['search'])) {
              // Perform the search using $_GET['q']
              $search = $_GET['search'];
              // ...
            } else {
              // Display an error message or provide a default value
              $search = 'default value';
              // ...
            }

            if ($search == 'default value') {
              $sql = "SELECT *FROM company_list LIMIT " . $page_first_result . ',' . $results_per_page;
            } else {
              $sql = "SELECT *FROM company_list WHERE 'name' LIKE '%$search%' LIMIT " . $page_first_result . ',' . $results_per_page;
            }
            $all_company = mysqli_query($conn, $sql);
            $number_of_result = mysqli_num_rows($all_company);
            $number_of_page = ceil($number_of_result / $results_per_page);
            // $row = mysqli_fetch_assoc($all_jobs);
            if($number_of_result > 0){
            while ($row = mysqli_fetch_assoc($all_company)) {
            ?>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="row card-body">
                      <div class="col-6">
                        <h5 class="card-title"><?php echo $row["name"] ?></h5>
                        <p class="card-text"><?php echo $row["email"] ?></p>
                        <p class="card-text"><?php echo $row["address"] ?></p>
                        <a href="../company-profiles " class="btn btn-primary">See more</a>
                      </div>
                      <div class="col-6 position-relative">
                        <img class="col-6 position-absolute top-0 start-50" src="../student7.png" alt="sans" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              
            <?php
            } 
            ?>                                                        
            <nav class="mx-auto" aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <?php
                  $pageNumber = 1;
                  if ($page >= 2) {
                    echo '<a class="page-link" href="company-list.php?page=' . ($page - 1) . '" aria-label="Previous">';
                    echo '<span aria-hidden="true">&laquo;</span>';
                  } else {
                    echo '<a class="page-link disabled" href="company-list.php?page=' . ($page - 1) . '" aria-label="Previous">';
                    echo '<span aria-hidden="true" class="disabled">&laquo;</span>';
                  }
                  ?>
                  </a>
                </li>
                <?php for ($page = 1; $page <= $number_of_page; $page++) {
                  echo '    <li class="page-item"><a class="page-link" href = "company-list.php?page=' . $page . '"> ' . $page . '</a></li>';
                }

                if (!isset($_GET['page'])) {
                  $page = 1;
                } else {
                  $page = $_GET['page'];
                }
                ?>
                <li class="page-item">
                  <?php
                  if ($page < $number_of_page) {
                    echo '<a class="page-link" href="company-list.php?page=' . ($page + 1) . '" aria-label="Next">';
                  } else {
                    echo '<a class="page-link disabled" href="company-list.php?page=' . ($page - 1) . '" aria-label="Next">';
                  }
                  ?>
                  <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          <?php
          } 
          else{
            echo '
                    <div class = "col-12 text-center">
                    <p class = "fs-1 bold"> No Entries Found </p>
                    </div>';
          }
          ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>


</html>