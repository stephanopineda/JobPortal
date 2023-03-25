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

        <title>Student Profile</title>
    </head>

    <body>

        <?php
            include('../navbar.php');
        ?>

        <h1>Student Profile</h1>
        <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">First Name</font>
          </font>
        </th>
        
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Last Name</font>
          </font>
        </th>

        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Email</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Course</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Contact Number</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Address</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Birthdate</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Sex</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Bio</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Actions</font>
          </font>
        </th>
      </tr>
        <!-- <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Student Id</th>
                    <th>Adress</th>
                    <th>Birthdate</th>
                    <th>Sex</th>
                    <th>Bio</th>
                </tr>
            </thead> -->
            <tbody>
                <?php
                    $result = selectData($conn,"student_profile","*");
                    $resultCheck = mysqli_num_rows($result);

<<<<<<< Updated upstream
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>". $row['firstname'] . "</font>
                                </font></td
                                ><td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>". $row['lastname'] . "</font>
                                </font></td
                                ><td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>". $row['email'] . "</font>
                                </font></td
                                ><td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>" . $row['course'] . "</font>
                                </font></td
                                ><td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>" . $row['contact_no'] . "</font>
                                </font></td
                                ><td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>". $row['address'] . "</font>
                                </font></td
                                ><td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>" . $row['birthdate'] . "</font>
                                </font></td>
                                <td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>" . $row['sex'] . "</font>
                                </font></td>
                                <td><font style='vertical-align: inherit;'>
                                <font style='vertical-align: inherit;'>" . $row['bio'] . "</font>
                                </font></td>
                                ";
                                echo "<td>";
                                echo "<div class='btn-group'>";
                                echo "<a class='btn btn-success' href='s.edit.php?id=". $row['id']."'> Edit </a>";
                                echo "<a class='btn btn-danger' href='s.delete.php?id=". $row['id']."'>Delete </a>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                        }
                    }
                ?>
                
            </tbody>
        </table>

    </body>
=======
      if ($result ->num_rows > 0){
          while($row = $result -> fetch_assoc()){
              echo "<tr><td>" . $row["id"] . "</td><td>" .
              $row["firstname"] . "</td><td>" .
              $row["lastname"] . "</td><td>" .
              
              $row["address"] . "</td><td>" .
              $row["birthdate"] . "</td><td>" .
              $row["sex"] . "</td><td>" .
              $row["bio"];
              
              echo "<td>";
              echo "<div class='btn-group'>";
              echo "<a class='btn btn-success' href='./s.edit.php?studentID=" .$row['id'] ."'>Edit </a>";
              echo "<a class='btn btn-danger' href='./s.delete.php?studentID=" .$row['id'] ."'>Delete </a>";
              echo "</div>";
              echo "</td>";

              echo "</tr>";



          }
      }
      else{
            
      }
      $conn->close();
      ?> 

    </tbody>
 </table>

</body>
>>>>>>> Stashed changes

</html>