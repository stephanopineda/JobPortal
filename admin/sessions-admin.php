<?php
    if($_SESSION['username']){
        if($_SESSION['admin_type']!='Admin'){
            header('Location: ../index.php');
        }
    }
    else{
        header('Location: ../index.php');
    }