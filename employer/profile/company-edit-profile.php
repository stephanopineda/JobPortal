<?php
    include('../../connections.php');
    include('../sessions.php');
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
      <h1 class='text-center'>Edit Company Profile </h1>
      </div>
    </div>

    <?php
    $company_id = $_SESSION['company_id'];
    $sql = "SELECT * FROM company_list WHERE company_id = '$company_id'";
    $result = $conn->query($sql);

    ?>

<div class="col-15 ">
            <div class="container-fluid mr-8 pb-4 shadow rounded">
                <div class="row">
                    <div class="col-12 mx-auto text-center mt-3" style="height: 150px;">
                    <?php
                $logo = $row['logo'];

                if ($logo == NULL) {
                  
                    echo "<img src='../../assets/img/UI/no-profile.png' class='img-fluid rounded-circle' alt='profile picture' style='height: 150px; width: 150px;'>";
                } else {
                    echo "<img src='../../assets/img/employer-profile/$logo' class='img-fluid rounded-circle' alt='profile picture' style='height: 150px; width: 150px;'>";
                }
                ?>
                    </div>
                    <div>
                    <form  action="c.edit-conn.php" method="post" enctype="multipart/form-data">
                    <label class="form-label fw-bold" for="name">Company Name: </label><br>
                        <input type="type" name="name" placeholder="<?php echo $row['name']?>" value="<?php echo $row['name']?>">
                    </div>
                    <div >
                    <label class="form-label fw-bold" for="employer_name">Employer Name: </label><br>
                        <input type="type" name="employer_name" placeholder="<?php echo $row['employer_name']?>" value="<?php echo $row['employer_name']?>">
                    </div>
                    <div >
                    <label class="form-label fw-bold" for="address">Email: </label><br>
                        <input type="type" name="email" placeholder="<?php echo $row['email']?>" value="<?php echo $row['email']?>">
                    </div>
                    <div >
                    <label class="form-label fw-bold" for="address">Address: </label><br>
                        <input type="type" name="address" placeholder="<?php echo $row['address']?>" value="<?php echo $row['address']?>">
                    </div>
                    <div >
                    <label class="form-label fw-bold" for="Contact Number:">Contact Number: </label><br>
                        <input type="type" name="contact_no" placeholder="<?php echo $row['contact_no']?>" value="<?php echo $row['contact_no']?>">
                    </div>
                    <div >
                    <label class="form-label fw-bold" for="size">Company Size: </label><br>
                        <input type="type" name="size" placeholder="<?php echo $row['size']?>" value="<?php echo $row['size']?>">
                    </div>
                    
                    <div >
                    <label class="form-label fw-bold" for="name">Overview: </label><br>
                        <input type="type" name="overview" placeholder="<?php echo $row['overview']?>" value="<?php echo $row['overview']?>">
                    </div>
                    
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                
                    <a href="index.php" class="btn btn-danger">Cancel</a> 
            </form>

                </div>
                
                    </div> 
            </div>
        </div>
    </div>
    </body>
    
</html>