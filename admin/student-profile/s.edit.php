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

    <title>Edit</title>
</head>
<body>
    
<form action="s.edit-conn.php" method="post">

    <?php
        $id = $_GET['id'];
        $result = selectData($conn, 'student_profile', '*');
        $row = mysqli_fetch_assoc($result)
        
    ?>

    <div class="form-group">
        <label for="name">First Name</label>
        <input type="text" class="form-control" name= "firstname" id="firstname" value= "<?php echo $row['firstname']; ?>">
    </div>
    
    <div class="form-group">
        <label for="address">Last Name</label>
        <input type="text" class="form-control" name= "lastname" id="lastname" value= "<?php echo $row['lastname']; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name= "email" id="email" value= "<?php echo $row['email']; ?>">
    </div>

    <div class="form-group">
        <label for="course">Course</label>
        <input type="text" class="form-control" name= "course" id="course" value= "<?php echo $row['course']; ?>">
    </div>

    <div class="form-group">
        <label for="contact_no">Contact Number</label>
        <input type="text" class="form-control" name= "contact_no" id="contact_no" value= "<?php echo $row['contact_no']; ?>">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name= "address" id="address" value= "<?php echo $row['address']; ?>">
    </div>

    <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="text" class="form-control" name= "birthdate" id="birthdate" value= "<?php echo $row['birthdate']; ?>">
    </div>
    <div class="form-group">
        <label for="sex">Sex</label>
        <input type="text" class="form-control" name= "sex" id="sex" value= "<?php echo $row['sex']; ?>">
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <input type="text" class="form-control" name= "bio" id="bio" value= "<?php echo $row['bio']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
    

</body>
</html>