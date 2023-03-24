<?php

    include('../../connections.php');
    include('../sessions-admin.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../header-link.php'); ?>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.3/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.21.3/dist/bootstrap-table.min.js"></script>
    <title>User Listing</title>
</head>
<body>
    
    <?php

        include('../navbar.php');

    ?>

    <h1>User Listing</h1>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>        
            </tr>
        </thead>
        <tbody>
                <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['userType']."</td>";
                    echo "</tr>";
                }

                ?>
        </tbody>
    </table>
</body>
</html>