<?php
    include('../../connections.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Company Profile</title>
    </head>

    <body>
        <?php
            include('../navbar.php');
        ?>
        
        <div class="container mt-5">
    <div class="row">
      <div class="col-15">
      <h1 class='text-center'>Company Profile </h1>
      </div>
    </div>

    <?php
    $sql = "SELECT * FROM company_list";
    $result = $conn->query($sql);
    
    // Check if there is any data
    if ($result->num_rows > 0) {
        // Output the company profile data
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="row">
        <div class="col-15 ">
            <div class="container-fluid mr-8 pb-4 shadow rounded">
                <div class="row">
                    <div class="col-12 mx-auto text-center mt-3" style="height: 150px;">
                        <img src="<?php echo $row["logo"]; ?>" alt="img" class="rounded-circle-center" name="logo" height="100%">
                    </div>
                    <div class="col d-flex flex-row-reverse">
                        <a href="company-edit-profile.html" class="btn btn-danger">Edit Profile</a>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-left fs-1" name="name"><?php echo $row["name"]; ?></p>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-left fs-5">Company Email</p>
                        <h6 text-left fs-3><?php echo $row["email"]; ?></h6>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-left fs-5">Address</p>
                        <h6 text-left fs-3><?php echo $row["address"]; ?></h6>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-left fs-5">Contact Number</p>
                        <h6 text-left fs-3><?php echo $row["contact_no"]; ?></h6>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-left fs-5">Company Size</p>
                        <h6 text-left fs-3><?php echo $row["size"]; ?></h6>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="text-left fs-5">Company Overview</p>
                        <h6 text-left fs-3><?php echo $row["overview"]; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    ?>

    </body>
    
</html>
