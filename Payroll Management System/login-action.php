<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                        $managerid = filter_input(INPUT_GET,'managerid');

                        $conn = new mysqli('localhost','root','');
                        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
                        mysqli_select_db($conn,"salary");
                        $sql="SELECT * FROM signup  WHERE mgrid='$_POST[managerid]' AND pass='$_POST[password]'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $_SESSION["managerid"] = $managerid;
                            header("Location:dashboard.php");
                        }
                        else {
                            
                            echo"<p>Manager ID or Password was Incorrect</p><form action='index.php'><button type='submit' class='btn theme-btn'>Try Again</button></form>";
                        }

                        mysqli_close($conn);
                    ?>
                    </div>
                    

                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>