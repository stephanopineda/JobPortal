<?php


if(isset($_POST['submit'])) {


    $jobTitle = $_POST['jobTitle'];
    $jobSummary = $_POST['jobSummary'];
    $jobQuali = $_POST['jobQuali'];
    $jobCategory = $_POST['jobCategory'];
    $workSetup = $_POST['workSetup'];
    $min = $_POST['min'];
    $max = $_POST['max'];
    $jobID = $row['jobID'];

    $sql = "UPDATE job_list SET jobTitle = '$jobTitle', jobSummary = '$jobSummary', jobQuali = '$jobQuali', jobCategory = '$jobCategory', workSetup = '$workSetup', min = '$min', max = '$max' WHERE jobID = '$jobID'";


    if (mysqli_query($conn, $sql)) {
       
        echo "<script> window.location.href = 'index.php' </script>'";
        echo "<script type='text/javascript'>alert('Job Updated Successfully!') </script>";
        echo "<script> </script>";

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
