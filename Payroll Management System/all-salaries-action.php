<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Details</title>
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

      <?php

	        $conn = new mysqli('localhost','root','');
	        if ($conn->connect_error) {
	            die("Connection failed: " . $conn->connect_error);
	         } 

	        mysqli_select_db($conn,"salary");
	 		$mon=$_GET['val'];
		    $sql = "SELECT * FROM calcul WHERE month='$mon'";
			$result = $conn->query($sql);
	        echo "<center><h3>Month :".$mon."</h3></center>";
			if ($result->num_rows > 0) {

	    ?>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-12 mx-auto">

                <div class="shadow-lg bg-white mt-4 rounded">
                    <div class="col text-center p-3">
                    <table class='table'>
                        <tr>
                            <th>Sl No</th>
                            <th>Employee ID</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Deduction</th>
                            <th>Final Salary</th>
                            <th>Number of Leave</th>
                        </tr>
                        <?php
                            $count=1;
                            while($row = $result->fetch_assoc()) {
                                print "<tr> <td>";
                                echo $count++; 
                                print "</td> <td>";    
                                echo $row["empid"]; 
                                print "</td> <td>";
                                echo $row["design"]; 
                                print "</td> <td>";
                                echo $row["bsal"]; 
                                print "</td> <td>";
                                echo $row["deduct"]; 
                                print "</td> <td>";
                                echo $row["tsal"]; 
                                print "</td> <td>";
                                echo $row["leav"]; 
                                print "</td> </tr>";
                            }
                        }
                            else
                            echo "<h4 class='text-center mt-4' >No Salary Details Found</h4>";
                            
                    ?>
                    </table>
                    </div>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>