<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container-fluid background">
        <div class="row h-100">
            <div class="col-6 col-lg-6">
                <nav class="navbar">
                    <a class="navbar-brand brand-light" href="#">
                        Payroll
                    </a>
                </nav>
            </div>
            <div class="col-6 col-lg-6 ">
                <div class="container h-100">
                    <div class="row align-items-center h-100" >
                        <div class="col-8 mx-auto p-4 login-card shadow-lg rounded">
                            <h4 class="login-header pb-2 text-center">Login</h4>
                            <form class="mt-4" action="login-action.php" method="post">
                                <div class="form-group pb-2">
                                <input type="text" class="form-control" placeholder="Manager ID" name="managerid" id="managerID" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group pb-2">
                                <input type="password" name="password" placeholder="Password" class="form-control" id="loginPassword">
                                </div>
                                <button type="submit" class="btn login-btn btn-block">Login</button>
                                <p class="mt-4 text-center">Not a Member? <a href="sign-up.php">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS salary";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";

		mysqli_select_db($conn,"salary");
		//Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS calcul ( 
		empid varchar(20) NOT NULL,
		design varchar(20) NOT NULL,
		month varchar(15) NOT NULL,
		bsal double NOT NULL,
		deduct double NOT NULL,
		tsal double NOT NULL,
		leav int(10) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table created successfully";
		} else {
		//echo "Error creating table: " . $conn->error;
		}
		
		
		$sql = "CREATE TABLE IF NOT EXISTS employee ( 
		name varchar(20) NOT NULL,
		empid varchar(20) NOT NULL,
		mobile bigint(15) NOT NULL,
		email varchar(40) NOT NULL,
		design varchar(20) NOT NULL,
		date1 varchar(20) NOT NULL,
		gen varchar(8) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table created successfully";
		} else {
		//echo "Error creating table: " . $conn->error;
		}
		
		
		$sql = "CREATE TABLE IF NOT EXISTS signup ( 
		name varchar(20) NOT NULL,
		mgrid varchar(20) NOT NULL,
		email varchar(30) NOT NULL,
		phone bigint(15) NOT NULL,
		pass varchar(15) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table created successfully";
		} else {
		//echo "Error creating table: " . $conn->error;
		}
		
		$conn->close();
		}
		?>
</body>
</html>