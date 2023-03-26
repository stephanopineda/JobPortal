<?php

include('../../../connections.php');
include('../sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('../../../header-link.php'); ?>
        <title>Admin Accounts</title>

    </head>
    <body>

    <?php
        include('../s-admin-navbar.php');
    ?>
        
    <div class="container py-5">
    <div class="row justify-content-center">
    <h2 class="mb-4 pb-4" style="text-align: center;"></h2>
    <h2 class="mb-2 fw-bold" style="text-align: left;">Admin Accounts</h2>
    <div class="mb-5">
    <a href="add-admin.php" class="btn btn-primary" role="button">Add Admin Account</a>
    </div>
    <div class="row mb-3 pb-3">
      <!-- <div class="col-auto mb-2"> -->


      <div class="col-auto">
        <label for="entries" class="col-sm-1 col-form-label">Show</label>
      </div>
      <div class="col-1">
        <input type="text" class="form-control" id="entries">
      </div>
      <div class="col-1 col-md-7">
        <label for="entries" class="col-sm-1 col-form-label">entries</label>
      </div>
      <!-- search bar -->
      <div class="col-auto">
        <label for="search" class="col-form-label">Search:</label>
      </div>
      <div class="col-auto">
        <input type="text" id="search" class="form-control">
      </div>

    </div>

  </div>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">User Name</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Name</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Email</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Admin</font>
          </font>
        </th>
        <th scope="col">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Actions</font>
          </font>
        </th>
      </tr>
    </thead>

            <?php
                $result = selectData($conn,"admin_accounts","*");
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['admin_type'] . "</td>";
                        
                        echo "<td>";
                        echo "<div class='btn-group'>";
                        echo "<a class='btn btn-success' href='edit-admin.php?id=" . $row['id'] ."'>Edit</a>";
                        echo "<a class='btn btn-danger' href='delete-admin.php?id=" . $row['id'] ."'>Delete</a>";
                        echo "</div>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>

        </table>

    </body>
</html>