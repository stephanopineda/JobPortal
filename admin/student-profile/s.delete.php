<?php
if (isset ($_GET['id'])){

    $id = $_GET["id"];
    include('../../connections.php');

    $sql = "DELETE FROM `student_profile` WHERE id = $id";
    $conn->query($sql);
}

header("location: s.profile.php");
exit;
