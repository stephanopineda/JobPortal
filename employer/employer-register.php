<?php
    include '../connections.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../header-link.php' ?>
    <link rel="stylesheet" href="assets/css/style.css"></link>

    <title>Company Register Form</title>
    <!-- Text area tag: disable default resize option -->
    <style>
    textarea {
    resize: none;
    }
    </style>

</head>
<body>
    <div>

        <div class="container">
            <div class="col-8 mx-auto mt-5">
            <div id="LogInCon" class="container-sm mt-5 py-5 p-5 bg-light login-form">
                <h1>Company Registration</h1>
                <p>Please fill out the form</p>
                <form id=""action="" method="post">
                        Company Name: <input type="text" name="name" placeholder="Palamigan"><br>
                        
                        Company Email: <input type="text" name="email" placeholder="example@email.com"><br>
                        
                        Company Address: <input type="text" name="address" placeholder="somewhere"><br>
                        
                        Company Contact No.: <input type="tel" id="contact_no" name="contact_no" pattern="[0-9]{11}" placeholder="09XXXXXXXXX"><br>
                        
                        Company Size: <input type="number" name="size" placeholder=""><br>
                        <!-- Enable preview for image upload -->
                        
                        Company Logo: <input type="file" name="logo" accept="image/png, image/jpg, image/jpeg, image/PNG"><br>
                        <!-- Text Area: Compnay Overview -->
                    <label for="overview">Company Overview:</label> <br>
                    
                    <textarea id="overview" name="overview" rows="8" cols="40"></textarea><br>
                    
                    <input type="submit" name="submit" value="Submit">
                    
                    <input type="reset"><br>
                </form>
                <?php
                    include('register.php');
                ?>
            </div>
        </div>
        </div>
    </div>
</body>
</html>