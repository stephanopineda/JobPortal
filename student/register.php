<?php 

            if(isset($_POST['submit'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname']; 
                $email = $_POST['email'];
                $course = $_POST['course'];
                $address = $_POST['address'];   
                $contactNumber = $_POST['contact_no'];
                $sex = $_POST['sex'];
                $birthdate = $_POST['birthdate'];
                $bio = $_POST['bio'];
                

                $tablename="student_profile";
                $columnquery="*";
 
               
                
                $result = selectWhere($conn, $tablename, $columnquery, 'email', $email);



                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        
                        echo "Account Exist";
                    }
                  } else {
                    $dataquery = "student_profile(firstname,lastname,email,course,contactNumber,address,birthdate,sex,bio)";
                    $valuequery="('$firstname','$lastname','$email','$course','$contactNumber','$address','$birthdate','$sex','$bio')";
                    insertData($conn,$dataquery,$valuequery);
                    echo '<script>
                    window.location.href = "profile/student-profile.php";
                  </script>';
                  }
                }
