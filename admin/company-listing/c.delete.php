<?php
if (isset ($_GET['company_id'])){
    $company_id = $_GET["company_id"];
    include('../../connections.php');

    $sql = "DELETE FROM `company_list` WHERE company_id = $company_id";
    $conn->query($sql);
}

header("location:c.listing.php");
exit;
