<?php
if (isset ($_GET['userID'])){
    
    $userID = $_GET["userID"];
    include('../../connections.php');

    $sql = "DELETE FROM `users` WHERE userID = $userID";
    $conn->query($sql);
}

header("location:u.listing.php");
exit;
?>