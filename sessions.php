<?php
    if($_SESSION['username']){
        if($_SESSION['user_type']=='Student'){
            header('Location: ');
        }elseif($_SESSION['user_type']=='Employer'){
            header('Location: ');
        }
    }
?>