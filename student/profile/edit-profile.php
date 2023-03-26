<?php
include '../../connections.php';
include '../sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../header-link.php';?>
    <link rel="stylesheet" href="../../assets/CSS/styles.css">
    <title>Edit Profile</title>
    </head>

    <body>
        <?php
include '../navbar.php';

$student_id = $_SESSION['student_id'];
selectWhere($conn, 'student_profile', '*', 'id', $student_id);

?>

<div class="container p-3 mx-auto">
    <div class="row ms-5 me-5">
        <div class="container border px-5 py-4 mb-5 rounded shadow">
            <div class="row">
                <div class="col-12">
                    <h1 class='text-center'>Edit Profile </h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex flex-row-reverse">
                <?php

                    $logo = $row['p_img'];

                    if ($logo == null) { ?>

                        <img src='../../assets/img/no-profile.png' class='img-fluid' alt='profile picture' style='height: 150px; width: 150px;'>";
                    <?php } else {
                        echo "<img src='../../assets/img/no-profile.png' class='img-fluid' alt='profile picture' style='height: 150px; width: 150px;'>";
                    }
                ?>
            </div>
                <div class="col mt-auto me-n5">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        +
                    </button>

                                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Picture</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="file">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" name = "updataImg">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <form action="POST">
            <div class="row mt-3">
                <div class="col form-group">
                    <label for="name" class="fw-bold">First Name</label>
                    <input type="text" class="form-control" name= "firstname" id="firstname" value= "<?php echo $row['firstname']; ?>">
                </div>
                <div class="col form-group">
                    <label for="address" class="fw-bold">Last Name</label>
                    <input type="text" class="form-control" name= "lastname" id="lastname" value= "<?php echo $row['lastname']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class=" col form-group">
                    <label for="email" class="fw-bold">Email</label>
                    <input type="text" class="form-control" name= "email" id="email" value= "<?php echo $row['email']; ?>">
                </div>
            </div>
            <div class="row">
                <div class ="col">
                    <div id="editEmail">

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col form-group">
                    <label for="course" class="fw-bold">Course</label>
                    <input type="text" class="form-control" name= "course" id="course" value= "<?php echo $row['course']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col form-group">
                    <label for="contact_no" class="fw-bold">Contact Number</label>
                    <input type="text" class="form-control" name= "contact_no" id="contact_no" value= "<?php echo $row['contact_no']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col form-group">
                    <label for="address" class="fw-bold">Address</label>
                    <input type="text" class="form-control" name= "address" id="address" value= "<?php echo $row['address']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="form-group">
                    <label for="birthdate" class="fw-bold">Birthdate</label>
                    <input type="text" class="form-control" name= "birthdate" id="birthdate" value= "<?php echo $row['birthdate']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col form-group">
                    <label for="sex" class="fw-bold">Sex</label>
                    <input type="text" class="form-control" name= "sex" id="sex" value= "<?php echo $row['sex']; ?>">
                </div>
            </div>
            <div class="row mt-5">
                <div class = "col d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary" name="updateInfo">Update</button>
                </div>
                <div class="col">
                    <a href="s.profile.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['updateImg'])){
        $p_img = $_FILES['p_img']['name'];
        $target = "../assets/img/student-profile/".basename($_FILES['p_img']['name']);
        $sql ="UPDATE student_profile 
        SET p_img = '$p_img";


        if(move_uploaded_file($_FILES['p_img']['tmp_name'], $target)){
            echo "Image uploaded successfully";
            echo '<script>
            window.location.href = "profile/student-profile.php";
          </script>';

          if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'>alert('Profile Updated Successfully!') </script>";
            header("location:edit-profile.php");
            echo "<script> </script>";

        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        }else{
            echo "There was a problem uploading image";
        }
    }
    if(isset($_POST['updateInfo'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $contact_no = $_POST['contact_no'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $sex = $_POST['sex'];
        $bio = $_POST['bio'];

        

        $tablename="users";
        $columnquery="*";

        $result = selectWhere($conn, $tablename, $columnquery, 'email', $email);


        if ($result->num_rows > 0) {

            echo "<script>
            document.getElementById('editEmail').innerHTML = 'Email Taken.';
          </script>";
        }

        else {
            $sql ="UPDATE student_profile 
                SET firstname='$fname', lastname='$lname', email='$email', course='$course', contact_no='$contact_no', address='$address', birthdate='$birthdate', sex='$sex', bio='$bio' WHERE id='$student_id'";

            if (mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'>alert('Profile Updated Successfully!') </script>";
                header("location:student-profile.php");
                echo "<script> </script>";

            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        
            



        
}
?>
    </body>

</html>