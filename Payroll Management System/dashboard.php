<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if($_SESSION["managerid"] === ""){
          echo $_SESSION['managerid'];
          echo "login";
          header("Location: index.php ");
        }
      ?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 theme-bg border-bottom shadow-md">
        <a class="navbar-brand brand-light my-0 mr-md-auto" href="#">
            Payroll
        </a>
      
        <a href="add-employee.php" class="nav-link active text-light">Add Employees</a>
        <a href="employee-details.php" class="nav-link text-light">Employee Details</a>
        <a href="salary-calc.php" class="nav-link text-light">Salary Calculation</a>
        <a href="all-salaries.php" class="nav-link text-light">All Salaries</a>
        
        <a class="btn btn-outline logout-btn" href="logout.php">Logout</a>
      </div>

      <div class="container">
          
      </div>
</body>
</html>