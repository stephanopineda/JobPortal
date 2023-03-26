<?php
    include ('../../connections.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../header-link.php'); ?>

    <title>Edit Student Profile</title>
</head>
<body>

<div id="PostJobCon" class="container-sm mt-5 py-5 p-5 bg-light login-form">
<form action="s.edit-conn.php" method="post">

    <?php
        $id = $_GET['id'];
        $result = selectData($conn, 'student_profile', '*');
        $row = mysqli_fetch_assoc($result)
        
    ?>
    <div class="col-md-12 text-center">
      <h1> Edit Student Profile </h1>
    </div> <br>

    <div class="form-group">
        <label for="name" class="fw-bold">First Name</label>
        <input type="text" class="form-control" name= "firstname" id="firstname" value= "<?php echo $row['firstname']; ?>">
    </div> <br>
    
    <div class="form-group">
        <label for="address" class="fw-bold">Last Name</label>
        <input type="text" class="form-control" name= "lastname" id="lastname" value= "<?php echo $row['lastname']; ?>">
    </div> <br>

    <div class="form-group">
        <label for="email" class="fw-bold">Email</label>
        <input type="text" class="form-control" name= "email" id="email" value= "<?php echo $row['email']; ?>">
    </div> <br>

    <div class="form-group">
        <label for="course" class="fw-bold">Course</label>
        <input type="text" class="form-control" name= "course" id="course" value= "<?php echo $row['course']; ?>">
    </div> <br>

    <div class="form-group">
        <label for="contact_no" class="fw-bold">Contact Number</label>
        <input type="text" class="form-control" name= "contact_no" id="contact_no" value= "<?php echo $row['contact_no']; ?>">
    </div> <br>

    <div class="form-group">
        <label for="address" class="fw-bold">Address</label>
        <input type="text" class="form-control" name= "address" id="address" value= "<?php echo $row['address']; ?>">
    </div> <br>

    <div class="form-group">
        <label for="birthdate" class="fw-bold">Birthdate</label>
        <input type="text" class="form-control" name= "birthdate" id="birthdate" value= "<?php echo $row['birthdate']; ?>">
    </div> <br>

    <div class="form-group">
        <label for="sex" class="fw-bold">Sex</label>
        <input type="text" class="form-control" name= "sex" id="sex" value= "<?php echo $row['sex']; ?>">
    </div> <br>
    <br>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
    <a href="s.profile.php" class="btn btn-danger">Cancel</a>
</form>
    

</body>
</html>