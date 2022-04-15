<?php
//start session function
session_start();

$NameOfUser = "IanMapacpac";
$PassOfUser = "ian";
$full_name = "Ian Mapacpac";
$full_address = "Brgy. Tabi Boac, Marinduque";

$url_add ="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];


if (isset($_REQUEST['LoginButton']) === true){

	if($_REQUEST["FormUsername"] != $NameOfUser){
		header("Location: ".$url_add."?notexist");
	}
	else if($_REQUEST["FormUsername"] == $NameOfUser && $_REQUEST["FormPassword"] != $PassOfUser){
		header("Location: ".$url_add."?wrongpass");
	}
	else if($_REQUEST["FormUsername"] == $NameOfUser && $_REQUEST["FormPassword"] == $PassOfUser){
		header("Location: ".$url_add."?success");

		$_SESSION["ses_username"] = $NameOfUser;
		$_SESSION["ses_password"] = $PassOfUser;
		$_SESSION["ses_fullname"] = $full_name;
		$_SESSION["ses_fulladd"]  = $full_address;
	}	
}

?>



<!doctype html>
<html lang="en">
  <head>
  	<title>MyTumblr Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>

body {
    
    background: linear-gradient(to bottom, #64CEEB,#1269C7);
    min-height:100vh;
    overflow-x: hidden
}</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-md-10 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">MyTumblr Login</h3>
						

						<form method="POST" class="login-form">
		      		<div class="form-group">
					
					<?php  

							else if(isset($_REQUEST["wrongpass"]) === true) {
								echo "<div class='alert alert-warning' role = 'alert'>
								Wrong Password...</div>";}
							else if(isset($_REQUEST["success"]) === true) {
									echo "<div class='alert alert-success' role = 'alert'>
									Redirecting...</div>";
									header("Refresh: 3; url=account.php"); }
							else if(isset($_REQUEST["signout"]) === true) {
									echo "<div class='alert alert-info' role = 'alert'>Thank you!</div>"; 	}
							else if(isset($_REQUEST['logfirst'])=== true){
								echo "<div class='alert alert-warning' role = 'alert'>Please login first</div>"; 	}
							else if(isset($_SESSION['ses_username']) === true){
									echo  "<div class='alert alert-warning' role = 'alert'>
									You are still log in please <a href=account.php><u>click here</u></a> to login</div>"; 
								   }
							?>
							
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="FormUsername" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name = "FormPassword" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#"><u>Forgot Password?</u></a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="LoginButton">Sign In</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

  <!--<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script> 

  php if(isset($_REQUEST["showall"]) === true) {
							echo "hi";
                }
                   ?><div class='col-lg-6 pr-lg-1 mb-2'><img src='images\3.png' alt='' class='img-fluid rounded shadow-sm'></div>
				   <div class='col-lg-6 pl-lg-1'><img src='images\4.png' alt='' class='img-fluid rounded shadow-sm'></div>-->

	</body>
</html>

