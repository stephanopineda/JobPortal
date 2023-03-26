<?php
    if(isset($_SESSION['username'])){
        if($_SESSION['admin_type']=='Superadmin'){
            header('Location: s-admin\dashboard\dashboard.php');
        }elseif($_SESSION['admin_type']=='Admin'){
            header('Location: dashboard\dashboard.php');
        }
    }

    $username=$_SESSION['username'];
    $result = selectWhere($conn, 'admin_accounts', '*', 'username', "$username");
    $row = $result->fetch_assoc();
    $_SESSION['admin_id'] = $row['id'];
