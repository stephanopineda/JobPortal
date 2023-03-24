<?php
    if(isset($_SESSION['username'])){
        if($_SESSION['user_type'] == 'Employer'){
            header('location: employer/dashboard/');
        }
    }
    else{
        header('location: ../../index.php');
    }