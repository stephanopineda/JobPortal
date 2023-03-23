<?php
    // Admin Accounts Table
    $tablequery = "(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),    
    password VARCHAR(100),
    admin_type enum('Admin','Superadmin'),
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
        userID int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(50) NOT NULL,
        name varchar(50) NOT NULL,
        email varchar(50) NOT NULL,
        password varchar(50) NOT NULL,
        userType enum('Student','Employer') NOT NULL
        )";
    createTable($conn, "users", $tablequery);

    // Company List Table
    $tablequery = "(
        company_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name varchar(50) NOT NULL,
        email varchar(50) NOT NULL,
        address varchar(50) NULL,
        contact_no VARCHAR(50) NOT NULL, 
        size VARCHAR(50) NULL, 
        logo VARCHAR(50) NULL, 
        overview TEXT(120) NULL,
        employer_id VARCHAR(50) NOT NULL
        )";
    createTable($conn, "company_list", $tablequery);

    // User Profile Table
    $tablequery = "(
        id int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(50) NOT NULL,
        lastname varchar(50) NOT NULL,
        email varchar(50) NOT NULL,
        course VARCHAR(50) NOT NULL,
        contactNumber int(11) NOT NULL,  
        address VARCHAR(120) NOT NULL, 
        birthdate DATE NOT NULL, 
        sex VARCHAR (6) NOT NULL,
        bio TEXT(200) NULL,
        )";
    createTable($conn, "student_profile", $tablequery);

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
    $tablequery = "(
        `jobID` int(6) AUTO_INCREMENT PRIMARY KEY,
        `jobTitle` varchar(50) NOT NULL,
        `jobSummary` varchar(50) NOT NULL,
        `jobQuali` varchar(50) NOT NULL,
        `jobCategory` varchar(50) NOT NULL,
        `jobType` varchar(50) NOT NULL,
        `workSetup`  varchar(50) NOT NULL,
        `jobSalary` int(11) NOT NULL,
        `CompanyId` int(11) NOT NULL
        )";
    createTable($conn, "job_list", $tablequery);

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