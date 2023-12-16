<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("../functions.php");
$ch = new News();

$info = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


	$email = trim($_POST['email']);
	$pwd = trim($_POST['pwd']);
	
	if (!empty($email) || !empty($pwd)) {

		$user = $ch->loginAdmin($email,$pwd);
		if ($user) {
			
		header("Location: homepage.php");
			exit;
		}else{
			$info = "login failed";
		}

	}else {

		$info = "fields are required";	
		
		

	}
}






?> 


 <!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<title></title>

	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css"> -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/admin-index.css">
</head>
<body>

<!-- login page here -->
	<div class="container-fluid auth_page">

		<div class="container-fluid header">

			<h1>ADMIN LOGIN</h1>
		
		</div>

			<h3>LOGIN HERE</h3>
			    <div class="second">
			    	
    	<form method="post" action="">
			    		<?php

			    		if (isset($info)) {
			    			echo $info;
			    		}

			    		?>
			    	  <div class="form-group">
			    	      <label for="exampleInputEmail1">Email address</label>
			    	      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			    	      
			    	    </div>

			    	  <div class="form-group">
			    	    <label for="exampleInputPassword1">Password</label>
			    	    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
			    	  </div>

			    	  

			    	 <input type="submit" name="login" class="default" value="Login">

			    	  <br>
			    	  <p class="next">Forget Password?<a href="forget_password.php" style="color: #009933;">Click Here</a></p>
			    	</form>
			    </div>

			


		


	</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>