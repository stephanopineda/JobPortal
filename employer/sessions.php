<?php
    if(isset($_SESSION['username'])){
        if($_SESSION['user_type'] == 'Student'){
            header('location: student/dashboard/');
        }
    }
    else{
        header('location: ../../index.php');
    }