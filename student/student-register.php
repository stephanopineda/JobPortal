<?php
    include '../connections.php';

    $username=$_SESSION['username'];
    $result = selectWhere($conn, 'users', '*', 'username', "$username");
    $row = $result->fetch_assoc();
    $_SESSION['user_id']=$row['userID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../header-link.php' ?>
    <link rel="stylesheet" href="../assets/CSS/styles.css">

    <title>Student Register Form</title>
    <!-- Text area tag: disable default resize option -->
</head>
<body style="display: flex;">
    <section class="signup_container">
        <div class="signup_bg">

            <div class="signup_header">
                <img src="../assets/img/jobportal_logo3.png" class="header_icon"/>
            </div>

            <form class="signup_form" id="" method="post" enctype="multipart/form-data">
                <span class="header_login">Student Registration</span>
                <span class="footer_text">Please fill out the form</span>
                <label class="signup_label" for="S.name"> First Name: </label>
                <input type="text" name="firstname" placeholder="Enter first name" class="signup_input" required>
                <label class="signup_label" for="S.name"> Last Name: </label>
                <input type="text" name="lastname" placeholder="Enter last name" class="signup_input" required>
                <label class="signup_label" for="S.email">Email:</label> 
                <input class="signup_input2" type="text" name="email" placeholder="example@email.com" required>
                <label class="signup_label" for="course">Program:</label> 
                <select class="select_dropdown" id="course" name="course">
                    <option value="none"> Choose Course  </option>
                    <option value="Computer Engineering"> Computer Engineering  </option>
                    <option value="Civil Engineering"> Civil Engineering  </option>
                    <option value="Electrical Engineering"> Electrical Engineering  </option>
                    <option value="Electronics & Communications Engineering"> Electronics & Communications Engineering </option>
                    <option value="Industrial Engineering"> Industrial Engineering </option>
                    <option value="Mechanical Engineering"> Mechanical Engineering </option>
                    <option value="Railway Engineering"> Railway Engineering </option>
                </select>
                <label class="signup_label" for="S.adress">Address:</label>  
                <input type="text" name="address" class="signup_input2" placeholder="somewhere" required>
                <label class="form-group" for="S.contact_no">Phone No.:</label>  
                <input class="signup_input" type="tel" id="contact_no" name="contact_no" pattern="[0-9]{11}" placeholder="09XXXXXXXXX" required>
                <label class="signup_label" for="S.logo">Upload Profile:</label>
                <input class="signup_input4" type="file" name="p_img" accept="image/png, image/jpg, image/jpeg, image/PNG">
                <label class="signup_label">Sex:</label> 
                <select class="select_dropdown" id="sex" name="sex">
                    <option value="none"> Select Sex </option>
                    <option value="Male"> Male  </option>
                    <option value="Female"> Female  </option>
                </select>
                <label class="signup_label" for="birthday">Birthdate:</label>
                <input class="bday_calendar" type="date" id="birthday" name="birthdate"> 
                <label class="signup_label" for="S.bio">Bio:</label>         
                <textarea id="bio" name="bio" rows="8" cols="40" class="form-control"></textarea>
                <div class="button_div">
                    <input type="reset"  class="btn btn-danger">
                    <input type="submit" name="submit" value="Submit"  class="btn btn-primary">
                </div>
            </form>

            <div class="signup_footer">
                <span class="footer_text"> Job Portal Solutions 2023 Grp. 2 & 3 <br> All Rights Reserved </span>
            </div>

        </div>

    </section>
                <?php
                    include('register.php');
                ?>
            </div>
        </div>
        </div>

    </div>
</body>
</html>