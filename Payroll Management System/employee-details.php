<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
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

      <?php
        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        mysqli_select_db($conn,"salary");
        $sql = "SELECT * FROM employee ";

        $result = $conn->query($sql);
    ?>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
          <div class="col-12 mx-auto">
                <div class="shadow-lg bg-white mt-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Date of Join</th>
                        <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $count=1;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                print "<tr><th scope='row'>";
                                echo $count++; 
                                print "</th> <td>";    
                                echo $row["empid"]; 
                                print "</td> <td>";
                                echo $row["name"]; 
                                print "</td> <td>";
                                echo $row["mobile"]; 
                                print "</td> <td>";
                                echo $row["email"]; 
                                print "</td> <td>";
                                echo $row["design"]; 
                                print "</td> <td>";
                                echo $row["date1"]; 
                                print "</td> <td>";
                                echo $row["gen"]; 
                                print "</td> </tr>";
                                }

                            }
                        else
                            echo '<tr><td colspan="8">No Employee Details Found</td></tr>';
                        ?>
                    </tbody>
                    </table>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>