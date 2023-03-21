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

 $tablequery = "(
        userID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(50) NOT NULL,
        name varchar(50) NOT NULL,
        email varchar(50) NOT NULL,
        password varchar(50) NOT NULL,
        userType enum('student','employer') NOT NULL
        )";
    createTable($conn, "users", $tablequery);
    // // Admin Accounts Table
    // $tablequery = "(
    //     `companyID` int,
    //     `companyName` varchar(50),
    //     `companyAddress` varchar(50),
    //     `companyLogo` varchar(50),
    //     `companySize` varchar(50),
    //     `companyOverview` varchar(50),
    //     `companyEmail` varchar(50),
    //     PRIMARY KEY (`companyName`)
    //     )";
    // createTable($conn, "company", $tablequery);

    // // Admin Accounts Table
    // $tablequery = "(
    //     `employerID` int,
    //     `email` varchar(50),
    //     `password` varchar(50),
    //     `employerName` varchar(50),
    //     `companyName` varchar(50),
    //     PRIMARY KEY (`employerID`)
    //   )";
    // createTable($conn, "employer", $tablequery);

    
    // // Admin Accounts Table
    // $tablequery = "(
    //     `jobID` int,
    //     `jobName` varchar(50),
    //     `employerID` int,
    //     `companyName` varchar(50),
    //     `jobSalary` int,
    //     `workSetup` varchar(50),
    //     `jobDescription` varchar(50),
    //     `jobType` varchar(50),
    //     `jobQuali` varchar(50),
    //     `jobExp` varchar(50),
    //     PRIMARY KEY (`jobID`)";
    // createTable($conn, "job_list", $tablequery);

    // // Admin Accounts Table
    // $tablequery = "(
    //     `studentID` int,
    //     `email` varchar(50),
    //     `Password` varchar(50),
    //     `studentName` varchar(50),
    //     `Address` varchar(50),
    //     `contactNo` varchar(50),
    //     `dateofBirth` date,
    //     `educationalBackground` varchar(50),
    //     `Skills` varchar(50),
    //     `Gender` varchar(50),
    //     `Bio` varchar(250),
    //     PRIMARY KEY (`studentID`)
    //   )";
    // createTable($conn, "student_list", $tablequery);