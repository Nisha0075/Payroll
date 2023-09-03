<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Salaries</title>
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

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4">
                    <div class="col text-center p-3">
                        Salary Details
                    </div>
                    <form action="all-salaries-action.php" method="get">
                        <div class="form-group mx-4 mt-4">
                            <select name="val" class="custom-select" required>
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                            </select>
                        </div>
                        <button type="submit" class="btn login-btn btn-block my-4">Get Salary Details</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>