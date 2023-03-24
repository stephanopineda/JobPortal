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
        <?php include('../../header-link.php'); ?>
        <title>Jobs</title>
    </head>

    <body>
        <?php
            include('../navbar.php');
        ?>
        
        <h1>Jobs</h1>
        <a href="add-jobs.php">Add Job</a>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Qualification</th>
                    <th>Category</th>
                    <th>Job Type</th>
                    <th>Work Setup</th>
                    <th>Salary</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
                <?php
                                $result = selectData($conn,"job_list","*");
                                $resultCheck = mysqli_num_rows($result);
                
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                        <td>" . $row['jobTitle'] . "</td
                                        ><td>" . $row['jobSummary'] . "</td>
                                        <td>" . $row['jobQuali'] . "</td>
                                        <td>" . $row['jobCategory'] . "</td>
                                        <td>" . $row['jobType'] . "</td>
                                        <td>" . $row['workSetup'] . "</td>
                                        <td>" . $row['min'] . " - ". $row['max']. "</td>
                                        <td>
                                            <a href='edit-jobs.php?id=" . $row['jobID'] . "'>Edit</a>
                                            <a href='delete-jobs.php?id=" . $row['jobID'] . "'>Delete</a>
                                        </td>
                                        </tr>";

                                    }
                                }
                ?>
            <tbody>
                <?php
                    
                ?>
            </tbody>    
        </table>

    </body>
</html>
