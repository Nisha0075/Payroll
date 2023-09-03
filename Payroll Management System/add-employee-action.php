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
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4 rounded">
                    <div class="col text-center p-3">
                    <?php
                        $conn = new mysqli('localhost','root','');
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        mysqli_select_db($conn,"salary");
                        $x=$_POST['employeeid'];
                        $sql = "SELECT * FROM employee WHERE empid='$x'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo"<p>Employee Already Registered</p><form action='add-employee.php'><button type='submit' class='btn theme-btn'>Try Again</button></form>";
                        }

                        else {
                                $sql="INSERT INTO employee (name,empid,mobile,email,design,date1,gen) VALUES ('$_POST[employeename]','$_POST[employeeid]','$_POST[mobile]','$_POST[email]','$_POST[designation]','$_POST[date]','$_POST[gender]')";
                    
                                if ($conn->query($sql) === TRUE) {
                                        echo"<p>Employee Details Uploaded Successfully</p><form action='dashboard.php'><button type='submit' class='btn theme-btn'>Done</button></form>";
                                }
                                else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                mysqli_close($conn);
                            }
                    ?>
                    </div>
                </div>
          </div>
        </div>
          
      </div>
</body>
</html>