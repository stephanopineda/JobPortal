<?php
    // Admin Accounts Table
    $tablequery = "(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),    
    password VARCHAR(100),
    admin_type VARCHAR(12),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    createTable($conn, "admin_accounts", $tablequery);

    // Superadmin Account    
	$sql = "SELECT * FROM admin_accounts WHERE username='superadmin'";
	$result = $conn->query($sql);
	if ($result->num_rows === 0){
		$sql = "INSERT INTO admin_accounts (username, name, email, password, admin_type) 
					VALUES ('superadmin', 'superadmin', 'superadmin@gmail.com', 'superadmin', 'Superadmin')";
                    // Admin pass: superadmin
		$conn->query($sql);
	}
	else{
		//echo "Superadmin exists.";
	}