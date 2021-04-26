<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	
	body{
		overflow-x: hidden;
	
	
	}
	.main-content{
		width: 30%;
		height: 25%;
		margin: 5px auto;
		background-color: #fff;
		border: 2px solid color: #E53935 ;
		padding: 20px 30px;
		
	}
	.header{
		border: 0px solid #000 ;
		margin-bottom: 1px;
	}
	.well{
		background-color:#337AFF;

	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background-color: #337AFF;

	}
	.row{
		background-color:#fff;
		
	}
	
		
	
	
</style>
<body>
<div class="row">
	<div class="col-sm-12">
		<div class="well">
			<center>
			<img src="images/nw1.jpg" class="img-rounded" title="Campus Connect" width="500px" height="100px">
			</center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
					</div><br>
					
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_country" required="required">
							<option enable>Select your Department</option>
							<option>Cse</option>
							<option>EEE</option>
							<option>English</option>
							<option>Law</option>
							<option>Economics</option>
							<option>Textile</option>
							<option>BBA</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required">
							<option enable  >Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
					</div><br>
					<a style="text-decoration:none;float: right;color: #337AFF;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>

					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign up</button></center>
					<?php include("insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>