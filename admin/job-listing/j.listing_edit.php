

<?php 
  include('../../connections.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../header-link.php'; ?>
    <link rel="stylesheet" href="assets/CSS/styles.css">
    <title>Add Job</title>
</head>

<body style="background-image: url('');">

  <div id="PostJobCon" class="container-sm mt-5 py-5 p-5 bg-light login-form">
    <form action= j.listing_edit_conn.php method= "POST">
        <?php
            
            $jobID = $_GET['jobID'];
            $sql = mysqli_query($conn, "SELECT * FROM job_list WHERE jobID = '$jobID'");
            while($row=mysqli_fetch_array($sql)){

        ?>
    
        <div class="form-group">
        <input type="hidden" name="jobID" value="<?php echo $jobID; ?>">
      </div>

      <div class="form-group">
        <label for="job_title">Job Title</label>
        <input type="text" class="form-control" name= "jobTitle" id="jobTitle" value= "<?php echo $row['jobTitle']; ?>">
      </div>
      <br>

      <div>
        <label for="jobSummary">Job Summary</label>
        <textarea id="jobSummary" class="form-control" name="jobSummary" value= "<?php echo $row['jobSummary']; ?>"  rows="8" cols="50"></textarea>
      </div> <br>

      <div>
        <label for="jobQuali">Job Requirements</label>
        <textarea id="jobQuali" class="form-control" name="jobQuali" value= "<?php echo $row['jobQuali']; ?>"  rows="8" cols="50"></textarea>
      </div>
      <br>

      <div class="form-group">
        <label for="jobCategory">Job Category</label> <br> <br>
        <select id="jobCategory" name="jobCategory" value= "<?php echo $row['jobCategory']; ?>">
            <option value="none"> Choose Job Category  </option>
            <option value="business"> Business and Financial Services  </option>
            <option value="construction"> Construction  </option>
            <option value="education"> Education  </option>
            <option value="restaurant"> Food & Beverage/Catering/Restaurant </option>
            <option value="health"> Health, Pharmaceuticals, and Biotech </option>
            <option value="hospitality"> Hospitality </option>
            <option value="it"> Information Technology </option>
            <option value="law"> Law Firm </option>
            <option value="estate"> Real Estate </option>
            <option value="transpo"> Transportation/Logistics  </option>
            <option value="distribution"> Wholesale/Retail and Distribution  </option>
            
        </select>
      </div>
      <br>

      <div class="form-group">
        <label for="jobType">Job Type</label> <br> <br>
        <select id="jobType" name="jobType" value= "<?php echo $row['jobType']; ?>">
            <option value="Full-Time"> Full-Time </option>
            <option value="Part-Time"> Part-Time </option>
        </select>
      </div>
      <br>

      <div class="form-group">
        <label for="workSetup">Work Setup</label> <br> <br>
        <select id="workSetup" name="workSetup" value= "<?php echo $row['workSetup']; ?>">
            <option value="Onsite"> On-site </option>
            <option value="WFH"> Work from Home </option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1salary">Salary</label>
        <input type="text" name= "jobSalary" class="form-control" value= "<?php echo $row['jobSalary']; ?>">
      </div>
      <br>

      <?php } ?>
      
      <br>
      <button type="submit" class="btn btn-primary" name="updateJob">Post</button>