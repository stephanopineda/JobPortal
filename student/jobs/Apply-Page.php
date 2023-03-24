<?php
    include '../../connections.php';
    include('../sessions.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
$jobID = $_SESSION['id'];
$result = selectWhere($conn, 'job_list', '*', 'jobID',$jobID);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $jobTitle = $row['job_title'];
    $jobSummary = $row['jobSummary'];
    $jobQuali = $row['jobQuali'];
    $jobCategory = $row['jobCategory'];
    $jobType = $row['job_type'];
    $workSetup = $row['workSetup'];
    $jobSalary =$row['jobSalary'];
    $CompanyId =$row['CompanyId'];

    $cresult = selectWhere($conn, 'job_list', '*', 'company_id',$CompanyId);
    $crow = mysqli_fetch_assoc($cresult);

    $companyName = $crow['name'];
  }
?>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../header-link.php'; ?>
    <link rel="stylesheet" href="assets/CSS/styles.css">
    <link rel="stylesheet" href="assets/CSS/login-bg.css">
    <title>Apply Now</title>

<body>
 

  
  <div class="container-xl">
    <br>
    <h1>Job Description</h1>
    <hr>
    <div class="container-xl rounded  my-2 bg-light ">
      <div class=" container py-2">
        <p class="mt-3"><strong> Job Title: </strong><?php echo $jobTitle; ?> </p>
        <p class="mt-3"><strong> Company Name: </strong><?php echo $companyName; ?> </p>  
        <p class="mt-3"><strong> Job Salary: </strong><?php echo $jobSalary; ?> </p> 
        <p class="mt-3"><strong> Work Setup: </strong><?php echo $workSetup; ?> </p>
        <p class="mt-3"><strong> Job Type: </strong><?php echo $jobType; ?> </p>  
        <p class="mt-3"><strong> Job Qualifications: </strong><?php echo $jobQuali; ?> </p>       
        <p class="mt-3"><strong> Job Category: </strong><?php echo $jobCategory; ?> </p>    
        <p class="mt-3"><strong> Job Summary </strong> <?php echo $jobSummary; ?> </p>
        <p><?php echo $description; ?> </p>  
        
        <div class="container-fluid">
          <form action="process-form.php" method="post">
            <input type="submit" class="btn btn-primary" value="Apply">
            <button type="button" class="btn btn-danger" href="../company-profiles.html">About Company</button>
          </form>
        </div>
      </div>
      
    </div>
   


  </div>