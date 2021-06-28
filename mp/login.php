<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

</head>
<body style="background-color:LightGray;">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link href="login.css" rel="stylesheet" id="style">
<div class="sidenav">
	     <center><img src="GITAM-logo.png" alt="GITAM" width="400" height="150"> </center>
         <div class="login-main-text">

            <h2>GITAM Hyderabad<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">



	<form action="" method="POST">
		<input class="btn" type="submit" name="admin_login" value="Admin Login" required><br><br>
		<br>
		<input class="btn" type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: adminlogin.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: studentlogin.php");
		}
	?>
 
            </div>
         </div>
      </div>


</body>
</html>