<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div style="text-align:center; vertical-align:middle;">
        <div>
            <h1>Company Registration</h1>
            <h2>Please fill out the form</h2>
        </div>
        <div class="display: inline-block; vertical-align: middle; line-height: 14px;">
            <form id="display: inline-block; vertical-align: middle; line-height: 14px;"action="student-register.php" method="post">
                Company Name: <input type="text" name="companyName" placeholder="Palamigan"><br>
                Company Email: <input type="text" name="companyEmail" placeholder="example@email.com"><br>
                Company Address: <input type="text" name="companyAddress" placeholder="somewhere"><br>
                Company Contact No.: <input type="tel" id="phone" name="companyContact" pattern="[0-9]{11}" placeholder="09XXXXXXXXX"><br>
                Company Size: <input type="number" name="companySize" placeholder=""><br>
                <!-- Enable preview for image upload -->
                Company Logo: <input type="file" name="companyLogo" accept="image/png, image/jpg, image/jpeg, image/PNG"><br>
                <!-- Text Area: Compnay Overview -->
                <label for="overview">Company Overview:</label> <br>
                <textarea id="overview" name="textarea" rows="8" cols="40"></textarea><br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset"><br>
            </form>
        </div>
    </div>
</body>
</html>