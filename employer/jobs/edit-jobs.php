<?php
    include('../../connections.php');
    include('../sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Jobs</title>
    </head>

    <body>
        <?php
            include('../navbar.php');
        ?>
        
        <div class="container mt-5">
    <div class="row">
      <div class="col-15">
      <h1 class='text-center'>Edit Jobs</h1>
      </div>
    </div>

    <?php
    $jobID = $_GET['jobID'];
    $sql = "SELECT * FROM job_list WHERE jobID = '$jobID'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

<div class="col-15 ">
            <form action="" method="post">
                <input type="hidden" name="<?php echo $row['jobID']?>" value=
                '<?php echo $row['jobID']?>'>

                <label for="jobTitle" class="fw-bold">Job Title</label>
                <br>
                <input type="text" value='<?php echo $row['jobTitle'] ?>' name="jobTitle">
                <br>
                <label for="Job Summary" class="fw-bold">Job Summary</label>
                <br>
                <input type="text" value='<?php echo $row['jobSummary'] ?>' name="jobSummary">
                <br>
                <label for="quali" class="fw-bold">Job Qualification</label>
                <br>
                <input type="text" value='<?php echo $row['jobQuali'] ?>' name="jobQuali">
                <br>
                <label for="jobTitle" class="fw-bold">Job Category</label>
                <br>
                <select name="jobCategory">
                    <?php
                    if($row['jobCategory'] == 'IT'){
                        echo "<option value='IT' selected> IT </option>";
                        echo "<option value='Accounting'> Accounting </option>";
                        echo "<option value='Marketing'> Marketing </option>";
                        echo "<option value='Human Resource'> Human Resource </option>";
                        echo "<option value='Sales'> Sales </option>";
                        echo "<option value='Others'> Others </option>";
                        } elseif($row['jobCategory'] == 'Accounting'){
                            echo "<option value='IT'> IT </option>";
                            echo "<option value='Accounting' selected> Accounting </option>";
                            echo "<option value='Marketing'> Marketing </option>";
                            echo "<option value='Human Resource'> Human Resource </option>";
                            echo "<option value='Sales'> Sales </option>";
                            echo "<option value='Others'> Others </option>";
                        } elseif($row['jobCategory'] == 'Marketing'){
                            echo "<option value='IT'> IT </option>";
                            echo "<option value='Accounting'> Accounting </option>";
                            echo "<option value='Marketing' selected> Marketing </option>";
                            echo "<option value='Human Resource'> Human Resource </option>";
                            echo "<option value='Sales'> Sales </option>";
                            echo "<option value='Others'> Others </option>";
                        } elseif($row['jobCategory'] == 'Human Resource'){
                            echo "<option value='IT'> IT </option>";
                            echo "<option value='Accounting'> Accounting </option>";
                            echo "<option value='Marketing'> Marketing </option>";
                            echo "<option value='Human Resource' selected> Human Resource </option>";
                            echo "<option value='Sales'> Sales </option>";
                            echo "<option value='Others'> Others </option>";
                        } elseif($row['jobCategory'] == 'Sales'){
                            echo "<option value='IT'> IT </option>";
                            echo "<option value='Accounting'> Accounting </option>";
                            echo "<option value='Marketing'> Marketing </option>";
                            echo "<option value='Human Resource'> Human Resource </option>";
                            echo "<option value='Sales' selected> Sales </option>";
                            echo "<option value='Others'> Others </option>";
                        } else{
                            echo "<option value='IT'> IT </option>";
                            echo "<option value='Accounting'> Accounting </option>";
                            echo "<option value='Marketing'> Marketing </option>";
                            echo "<option value='Human Resource'> Human Resource </option>";
                            echo "<option value='Sales'> Sales </option>";
                            echo "<option value='Others' selected> Others </option>";
                        }
                    ?>

                </select>
                <br>
                <label for="jobTitle" class="fw-bold">Work Setup</label>
                <br>
                <select name="workSetup" id="workSetup">
                    <?php
                    if($row['workSetup'] == 'WFH'){
                        echo "<option value='WFH' selected>Work from Home </option>";
                        echo "<option value='On-site'>On-site</option>";
                        } else{
                            echo "<option value='WFH'>Work from Home </option>";
                            echo "<option value='On-site'  selected>On-site</option>";
                        }
                    ?>
                </select>
                <br>
                <label for="jobTitle" class="fw-bold">Salary</label>
                <br>
                <input type="text" value='<?php echo $row['min'] ?>' name="min">
                <input type="text" value='<?php echo $row['max'] ?>' name="max">
                <br>
                <br>
                <?php
                include ('jobs-edit-conn.php');
                ?>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a> 
            </form>

                </div>
                
                    </div> 
            </div>
        </div>
    </div>
    </body>
    
</html>
