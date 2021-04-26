<!DOCTYPE html>

<?php
session_start();
include("includes/header.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}


?>

<html>    
 
<head>
	
	<title>Edit Account></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style> 
      
      
     #upload_image_button{
      	 background-color:#36DB43;
      }
      #btn-post{
      	 background-color:#36DB43;
      }
       #btn-custom{
      	 background-color:#36DB43;
      }
      h2{
      	color:#000000;
      }
         
         </style>
<body>
<div class="row">
	<div class="col-sm-2">
</div>
<div class="col-sm-8">
	<from action="" method="post" enctype="multipart/from-data">
		<table  class="table table-bordered table-hover">
			<tr align="center">
				<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
			</tr>
			<tr>
				<td style="font-weight: bold; ">Change Your First Name</td>
				<td>
					<input class="from-control" type="text" name="f_name" required value="
					<?php echo $first_name;?>" >
					
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Change Your Last Name</td>
				<td>
					<input class="from-control" type="text" name="l_name" required value="<?php 
					echo $last_name ;?>" >
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Change Your User Name</td>
				<td>
					<input class="from-control" type="text" name="u_name" required value="<?php 
					echo $user_name ;?>" >
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Change Description</td>
				<td>
					<input class="from-control" type="text" name="describe_user" required value="<?php 
					echo $describe_user ;?>" >
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Relationship Status</td>
				<td>
					<select class="from-control"  name="Relationship" >
					<option><?php echo $Relationship_status?></option>
					<option>Single</option>
						<option>open relationship</option>
					</select>
				
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Change Password</td>
				<td>
					<input class="from-control" type="password" name="u_pass" id="mypass"required value="<?php 
					echo $user_pass ;?>" >
					<input type="checkbox" onclick="show_password()"><strong>show password</strong>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">email</td>
				<td>
					<input class="from-control" type="email" name="u_email" required value="<?php 
					echo $user_email ;?>" >
					
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Country</td>
				<td>
					<select class="from-control"  name="u_country" >
					<option><?php echo $user_country?></option>
					<option>cse</option>
						<option>bba</option>
						<option>english</option>
						<option>economics</option>
					</select>
				
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">gender</td>
				<td>
					<select class="from-control"  name="u_gender" >
					<option><?php echo $user_gender?></option>
					<option>male</option>
						<option>female</option>
						<option>others</option>
					
					</select>
				
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">birthday</td>
				<td>
					<input class="from-control input-md" type="date" name="u_birthday" required value="<?php 
					echo $user_birthday ;?>" >
					
				</td>
			</tr>

			<tr>
					<td style="font-weight: bold;">Forgotten Password</td>
					<td>   
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mymodal">Turn On</button>
						<div id="mymodal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">modal header</h4>
									</div>
									<div class="modal-body">
										<form action="recovery.php?id=<?php echo $id; ?>" method="post"
										id="f">
										<strong>what is your school best friend name</strong>
										<textarea class="from-control" cols="83" rows="4" name="content" placeholder="someone"></textarea><br>
										<input  class="btn btn-default" type="submit" name="sub" value="submit" style="width:100px;"><br>
										<pre>answer the avobe question we will ask you this question if you forget<br> password</pre><br><br>
									</form>
									<?php
                                      if(isset($_POST['sub'])){
                                      $bfn=($_POST['content']);
                                      if  ($bfn==''){
                                      echo" <script >alert ('enter something')</script>";
									echo "<script>window.open('edit_profile.php?u_id=$id' , '_self')</script>";
									exit();
                                  }
                                  else{
                                  $update="UPDATE users SET recovery_account='$bfn' WHERE id='$id'";
                                  $run=mysqli_query($con,$update);
                                  if($run){
                                  echo" <script >alert ('profile is updated')</script>";
									echo "<script>window.open('edit_profile.php?u_id=$id' , '_self')</script>";
                              }
                              }



                                  }

									?>

							
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
								</div>

								</div>
							</div>
							</div>



					</td>
				
			</tr>


  	
  		
  	

  
  


		</table>
	</from>
<center><button id="signin" class="btn btn-info btn-lg" name="login">update</button></center>
<?php include("update.php"); ?>

	</div>
	<div class="col-sm-6">
	</div>

	
</div>


</body>
</html>

