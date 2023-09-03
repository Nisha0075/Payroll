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
                            <h4 class="login-header pb-2 text-center">Sign Up</h4>
                            <form action="signup-action.php" method="post">
                                <div class="form-group mx-4 mt-4">
                                    <input type="text" name="name" required class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group mx-4 mt-4">
                                    <input type="text" name="managerid" required class="form-control" placeholder="Manager ID">
                                </div>
                                <div class="form-group mx-4 mt-4">
                                    <input type="email" name="email" required class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group mx-4 mt-4">
                                    <input type="tel" name="phoneno" required class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group mx-4 mt-4">
                                    <input type="password" name="password" required class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mx-4 mt-4">
                                    <button type="submit" class="btn login-btn btn-block">Sign Up</button>
                                </div>
                                <p class="mt-4 text-center">Already have an Account? <a href="index.php">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>