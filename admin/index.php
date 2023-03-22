<?php
    include '../connections.php';    
    include 'sessions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../header-link.php'; ?>

    <title>Admin Portal</title>
</head>
<body>

<div class="container">
        <div class="col-8 mx-auto mt-4">
            <div id="LogInCon" class="container-xsm mt-5 py-5 p-5 bg-light login-form">
                <form action="index.php" method="post">
                    <h1>Admin Portal</h1>
                    <br>
                    <div class=form-group>
                        <label for="username">Username</label>
                        <br>
                        <input class="form-control" type="text" name="username" placeholder="Enter username">
                    </div>
                    <br>
                    <div class=form-group>
                    
                        <label for="password">Password</label>
                        <br>
                        <input class="form-control" type="password" name="password" placeholder="Enter password">
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" name="login" value="Sign In">
            
            <?php
                
                if(isset($_POST['login'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];    
                    $tablename="admin_accounts";
                    $columnquery="*";
                    
                    $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $_SESSION['username']=$username;
                            $_SESSION['admin_type']=$row['admin_type'];
                            
                            if($row['admin_type']=='Superadmin'){
                                header('Location: s-admin\dashboard\dashboard.php');
                            }else{
                                header('Location: dashboard\dashboard.php');
                            }
                        }
                    } else {
                        echo "No account existing.";
                    }
                }
            ?>

            </form>
        </div>
    </div>
</div>

</body>

</html>