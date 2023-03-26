<?php
    include '../../../connections.php';
    include('../sessions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../../header-link.php'); ?>
    <title>Add Admin</title>
</head>

<body>
<?php
        include('../s-admin-navbar.php');

        $adminID = $_GET['id'];
        $result = selectWhere($conn, 'admin_accounts', '*', 'id', $adminID);
        $row = mysqli_fetch_assoc($result);
    ?>

    <form method="POST">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto mt-5">
                <div class="container-sm mb-5 mt-5 py-5 p-5 bg-light login-form">
                <form method="POST">
                <h2>Edit Account</h2><br>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                </div>
                <div id="adminnametaken">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>">
                </div>
                <div id="adminusertaken">
                </div>
                <br>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
                </div>
                <div id="adminemailtaken">

                </div>
                <br>
                <div class="form-group">
                    <input list="browsers" class="form-control" name="browser" id="browser" placeholder="Admin Type">
                </div>
                <br><br>
                <input type="submit" class="btn btn-primary" name="updateAdmin" value="Update">
                <a class ="btn btn-danger" href="admin-accounts.php">Cancel</a>
                </div>
            </div>
        </div>
    </div>
        <datalist id="browsers">
            <option value="Admin">
            <option value="Superadmin">
        </datalist>
        
        <?php
             

            if(isset($_POST['updateAdmin'])){
                $name = $_POST['name'];    
                $username = $_POST['username'];
                $email = $_POST['email']; 
                $admintype = $_POST['browser'];      
                $tablename="admin_accounts";
                $columnquery="*";
                
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);

                $nresult = selectWhere($conn, $tablename, $columnquery, 'name', $name);

                $eresult = selectWhere($conn, $tablename, $columnquery, 'email', $email);
        
        
                if ($eresult->num_rows > 0) {
        
                    echo "<script>
                    document.getElementById('adminemailtaken').innerHTML = 'Email Taken.';
                  </script>";
                }

                if ($nresult->num_rows > 0) {
        
                    echo "<script>
                    document.getElementById('adminnametaken').innerHTML = 'Name Taken.';
                  </script>";
                }

                if ($result->num_rows > 0) {
        
                    echo "<script>
                    document.getElementById('adminusertaken').innerHTML = 'Username Taken.';
                  </script>";
                }
        
                if($result->num_rows <= 0 && $eresult->num_rows <= 0 && $nresult->num_rows <= 0) {
                    $sql ="UPDATE admin_accounts
                        SET username='$username', name='$name', email='$email', admin_type='$admintype'
                        WHERE id = '$adminID'";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script type='text/javascript'>alert('Admin Updated Successfully!') </script>";
                        header("location:admin-accounts.php");
        
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                }
            }
        ?>

    </form>

</body>
</html>