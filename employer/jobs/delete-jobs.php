<?php
include('../../connections.php');
if (isset ($_GET['id'])){

    $jobID = $_GET["id"];

    $sql = "DELETE FROM `job_list` WHERE jobID = $jobID";
    $conn->query($sql);
}

header("location: index.php");
exit;
