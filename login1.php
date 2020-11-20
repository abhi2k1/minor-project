<?php
session_start();
include "connection.php";


?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>LOGIN FORM</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" name="userName" placeholder="userName" title="Please enter you username" required="" value=""  id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" name="password" title="Password" placeholder="******" required="" value=""  id="password" class="form-control">

                            </div>

                            <button class="btn btn-success btn-block loginbtn" type="submit" name="login">Login</button>
                            <a class="btn btn-default btn-block" href="register.php">Register</a>

                            <div class="alert alert-danger" id="invalid" style="margin-top:10px; display:none">
                                <strong>Does Not Match!</strong>Invalid UserName or Password.
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>
    <?php
        if(isset($_POST["login"])){
            $sql="SELECT * FROM registration WHERE userName='$_POST[userName]' AND password='$_POST[password]'";
            $result=$mysqli->query($sql);
            $count=$result->num_rows;
            if($count==0){
                ?>
                <script type="text/javascript">
                    document.getElementById('invalid').style.display="block";
            </script>
            <?php
            }else{
                $_SESSION["userName"]=$_POST["userName"];

                ?>
                <script type="text/javascript">
                    document.getElementById('invalid').style.display="none";
                    window.location="select_exam.php";
            </script>
            <?php

            }
        }
    
    ?>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>


</body>

</html>