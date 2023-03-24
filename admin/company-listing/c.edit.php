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
    
<form action="c.edit-conn.php" method="post">

    <?php
        $id = $_GET['company_id'];
        $result = selectData($conn, 'company_list', '*');
        $row = mysqli_fetch_assoc($result)
        
    ?>

    <div class="form-group">
        <label for="name">Company Name</label>
        <input type="text" class="form-control" name= "name" id="name" value= "<?php echo $row['name']; ?>">
    </div>
    
    <div class="form-group">
        <label for="address">Company Address</label>
        <input type="text" class="form-control" name= "address" id="address" value= "<?php echo $row['address']; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="text" class="form-control" name= "email" id="email" value= "<?php echo $row['email']; ?>">
    </div>

    <div class="form-group">
        <label for="employer_name">Contact Person</label>
        <input type="text" class="form-control" name= "employer_name" id="employer_name" value= "<?php echo $row['employer_name']; ?>">
    </div>

    <div class="form-group">
        <label for="contact_no">Contact Number</label>
        <input type="text" class="form-control" name= "contact_no" id="contact_no" value= "<?php echo $row['contact_no']; ?>">
    </div>

    <div class="form-group">
        <label for="size">Company Size</label>
        <input type="text" class="form-control" name= "size" id="size" value= "<?php echo $row['size']; ?>">
    </div>

    <div class="form-group">
        <label for="logo">Logo</label>
        <input type="text" class="form-control" name= "logo" id="logo" value= "<?php echo $row['logo']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
    

</body>
</html>