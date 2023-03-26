<?php
    include('../../connections.php');
    include('../sessions-admin.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../header-link.php'); ?>

    <title>Job Listing</title>
</head>
<body>

    <?php
        include('../admin-navbar.php');
    ?>
    <html lang="en">


    <div class="container py-5">
    <div class="row justify-content-center">
    <h2 class="mb-4 pb-4" style="text-align: center;"></h2>
    <h2 class="mb-3 pb-3 fw-bold" style="text-align: left;">Job List</h2>

    <div class="row mb-2 pb-2">
      <!-- <div class="col-auto mb-2"> -->
      <div class="col-auto">
        <label for="entries" class="col-sm-1 col-form-label">Show</label>
      </div>
      <div class="col-1">
        <input type="text" class="form-control" id="entries">
      </div>
      <div class="col-1 col-md-7">
        <label for="entries" class="col-sm-1 col-form-label">entries</label>
      </div>
      <!-- search bar(or palitan mo nalang nung search bar na gawa nyo) -->
      <div class="col-auto">
        <label for="search" class="col-form-label">Search:</label>
      </div>
      <div class="col-auto">
        <input type="text" id="search" class="form-control">
      </div>
    </div> <br>
    <form action="j.listing_pdf.php" method="post">  
      <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate Report" />  
    </form>  

  </div>


  <table class="table table-striped table-sm">
    <thead>
      <tr>
      <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Job ID</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Job Title</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Job Summary</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Job Qualifications</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Job Category</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Job Type</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Work Setup</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Job Salary</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"></font>
          </font>
        </th>
      </tr>
    </thead>

    <tbody>
      <?php
      $sql = "SELECT * FROM job_list";
      $result = $conn -> query($sql);

      if ($result ->num_rows > 0){
          while($row = $result -> fetch_assoc()){
              echo "<tr><td>" . $row["jobID"] . "</td><td>" .
              $row["jobTitle"] . "</td><td>" .
              $row["jobSummary"] . "</td><td>" .
              $row["jobQuali"] . "</td><td>" .
              $row["jobCategory"] . "</td><td>" .
              $row["jobType"] . "</td><td>" .
              $row["workSetup"] . "</td><td>" .
              $row["min"]." - ". $row["max"].
              "</td><td>";

              echo "<td>";
              echo "<div class='btn-group'>";
              echo "<a class='btn btn-success' href='./j.listing_edit.php?jobID= " .$row['jobID'] ."'>Edit </a>";
              echo "<a class='btn btn-danger' href='./j.listing_delete.php?jobID= " .$row['jobID'] ."'>Delete </a>";
              echo "</div>";
              echo "</td>";

              echo "</tr>";



          }
      }
      else{
          echo "There is no data";
      }
      $conn->close();
      ?> 

    </tbody>
  </table>
</div>

    <!-- <table>

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Logo</th>
                <th>Company Size</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table> -->

</body>
</html>