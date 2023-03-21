<?php
    if($_SESSION['username']){
        if($_SESSION['admin_type']!='Superadmin'){
            header('Location: ../../index.php');
        }
    }
    else{
        header('Location: ../../index.php');
    }