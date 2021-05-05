<?php
include("includes/connection.php");
include("functions/functions.php");
?>



    <style> 
      
#search{
      	 background-color:#36DB43;
      }



.navbar-nav .navbar-collapse,
.navbar-nav .navbar-text 
{
      	color:#fff;
      }
         
        .navbar-custom{
        	background-color:#000099; 
        } 

    
          #user_query{
          	background-color:#337AFF; 
          }
        .navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text { 
            color:#fff; 
            font-size: 40px;
        } 
 .navbar-custom .navbar-fluid, 
        .navbar-custom .navbar-text { 
            color:#fff; 
            
        }

       
    </style> 

<nav class="navbar navbar-custom">

	<div class="container-fluid">
		<div class="navbar-dark">
			<button type="button" class="navbar-toggle collapsed"   data-target="#bs-example-navbar-collapse-1"  data-toggle="collapse" aria-expanded="false">
			<span class="sr-only span" >Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			
			</button>
			<a class="navbar-brand" href="home.php" >Campus Connect</a>
		</div>

		<div class="collapse navbar-collapse" id="navbarSupportedContent" >
	      <ul class=" nav navbar-nav">
	      	
	      	<?php 
			$user = $_SESSION['user_email'];
			$get_user = "select * from users where user_email='$user'"; 
			$run_user = mysqli_query($con,$get_user);
			$row=mysqli_fetch_array($run_user);
					
			$id = $row['id']; 
			$user_name = $row['user_name'];
			$first_name = $row['f_name'];
			$last_name = $row['l_name'];
			$describe_user = $row['describe_user'];
			$Relationship_status = $row['relationship'];
			$user_pass = $row['user_password'];
			$user_email = $row['user_email'];
			$user_country = $row['user_country'];
			$user_gender = $row['user_gender'];
			$user_birthday = $row['user_birthday'];
			$user_image = $row['user_image'];
			$user_cover = $row['user_cover'];
			$recovery_account = $row['recovery_account'];
			$register_date = $row['user_reg_date'];
					
					
			$user_posts = "select * from posts where id='$id'"; 
			$run_posts = mysqli_query($con,$user_posts); 
			$posts = mysqli_num_rows($run_posts);
			?>

	        
	        <li><a class="navbar-fluid" href='profile.php?<?php echo "u_id=$id" ?>'><?php echo "$first_name"; ?></a></li>
	       	<li><a class="navbar-fluid" href="home.php">Home</a></li>
			<li><a class="navbar-fluid" href="members.php">Find People</a></li>
			<li><a class="navbar-fluid" href="messages.php?u_id=new">Messages</a></li>


					<?php
						echo"

						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down'></i></span></a>
							<ul class='dropdown-menu'>
								<li>
									<a href='my_post.php?u_id=$id'>My Posts <span class='badge badge-secondary'>$posts</span></a>
								</li>
								<li>
									<a href='edit_profile.php?u_id=$id'>Edit Account</a>
								</li>
								<li role='separator' class='divider'></li>
								<li>
									<a href='logout.php'>Logout</a>
								</li>
							</ul>
						</li>
						";
					?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<form class="navbar-form navbar-left" method="get" action="results.php">
						<div class="form-group">
							<input type="text" class="form-control "name="user_query" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-success" id="search">Search</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>