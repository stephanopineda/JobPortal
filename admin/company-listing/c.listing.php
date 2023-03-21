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
    <title>Company Listing</title>
</head>
<body>

    <?php
        include('../navbar.php');
    ?>

    <h1>Company Listing</h1>
    
    <table>

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Logo</th>
                <th>Company Size</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

</body>
</html>