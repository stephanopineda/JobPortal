<?php

include('../../connections.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Admin Accounts</title>

    </head>
    <body>

        <?php
        
            include('../navbar.php');
        
        ?>
        
        <h1>Admin Accounts</h1>
        
        <table>

            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin Type</th>        
            </tr>
            <?php
                $sql = "SELECT * FROM admin_accounts";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['username'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['admin_type'] . "</td></tr>";
                    }
                }
            ?>
        </table>

    </body>
</html>