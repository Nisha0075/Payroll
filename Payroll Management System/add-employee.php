<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
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
                        Add Employee
                    </div>
                    <form action="add-employee-action.php" method="post">
                        <div class="form-group mx-4 mt-4">
                            <input type="text" name="employeename" required class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" name="employeeid" required class="form-control" placeholder="Employee ID">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="tel" name="mobile" required class="form-control" pattern="[0-9]{10}" placeholder="Mobile Number">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="email" name="email" required class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <select name="designation" class="custom-select" required>
                                <option value="">Designation</option>
                                <option value="Daily Labour">Daily Labour</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Asst. Manager">Assistant Manager</option>
                            </select>
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <label for="employeedoj">Date of Join</label>
                            <input type="date" name="date" id="employeedoj" required class="form-control" placeholder="Date of Joining">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <label for="employeegender">Gender</label>
                            <select name="gender" id="employeegender" class="custom-select" required>
                                <option value="">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <button type="submit" class="btn login-btn btn-block my-4">Add Employee</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>