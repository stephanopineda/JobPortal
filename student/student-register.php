<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"></link>

    <title>Student Register Form</title>
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
            <h1>Student Registration</h1>
            <h2>Please fill out the form</h2>
        </div>
        <div class="display: inline-block; vertical-align: middle; line-height: 14px;">
            <form id="display: inline-block; vertical-align: middle; line-height: 14px;"action="student-register.php" method="post">
                First Name: <input type="text" name="firstName" placeholder="Juan"><br>
                Last Name: <input type="text" name="lastName" placeholder="Dela Cruz"><br>
                Email: <input type="text" name="email" placeholder="example@email.com"><br>
                <!-- remove student ID not necessary -->
                <!-- Student ID: <input type="text" name="studentId" placeholder="ex. 2023-000000-AB-0"><br> -->
                Address: <input type="text" name="address" placeholder="Address"><br>
                Contact No.: <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="09XXXXXXXXX"><br>
                <!-- Birthdate -->
                <label for="birthday">Birthdate:</label>
                <input type="date" id="birthday" name="dateOfBirth"><br>
                <!-- Dropdown: Elementary, Senior High School, College : To Be replaced by course-->
                <!-- <label for="educBackground">Educational Background: </label>
                <select name="educBackground">
                    <option value="Elementary">Elementary</option>
                    <option value="Senior High School">Senior High School</option>
                    <option value="College">College</option>
                    <option value="Technical Vocational">Technical Vocational</option>
                    <option value="Doctorate">Doctorate</option>
                </select><br> -->
                <!-- Checkbox for multiple skills : remove? skills can be mentioned or include in bio -->
                <!-- Skills: <input type="text" name="skills" placeholder="Skills"><br> -->
                <!-- Radio button: Male, Female -->
                <label>Sex:</label> &nbsp;
                <input type="radio" class="form-check-input" name="sex" id="male" value="male">
                <label for="male" class="form-input-label">Male</label> &nbsp;
                <input type="radio" class="form-check-input" name="sex" id="female" value="female">
                <label for="feamle" class="form-input-label">Female</label><br>
                <!-- Text Area: Bio -->
                <label for="bio">Bio:</label> <br>
                <textarea id="bio" name="textarea" rows="8" cols="40"></textarea><br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset"><br>

                <?php
            
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $name = $_POST['name']; 
                $email = $_POST['email'];   
                $password = $_POST['password']; 
                $usertype = $_POST['usertype'];      
                $tablename="users";
                $columnquery="*";
 
               
                
                $result = selectWhere($conn, $tablename, $columnquery, 'username', $username);



                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        
                        echo "Account Exist";
                    }
                  } else {
                    $dataquery = "users(username,name,email,password,usertype)";
                    $valuequery="('$username','$name','$email','$password','$usertype')";
                    insertData($conn,$dataquery,$valuequery);
                    if($usertype == 'Student'){
                        header('Location: student/student-register.php');
                    }
                    elseif($usertype == 'Employer'){
                        header('Location: employer/employer-register.php');
                    }  
                  }
            }
        ?>
            </form>
        </div>
    </div>
</body>
</html>