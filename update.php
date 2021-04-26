<?php



if(isset($_POST['login'])){
$f_name=htmlentities($_POST['f_name']);
$l_name=htmlentities($_POST['l_name']);
$u_name=htmlentities($_POST['u_name']);
$describe_user=htmlentities($_POST['describe_user']);
$Relationship_status=htmlentities($_POST['Relationship']);

$u_pass=htmlentities($_POST['u_pass']);
$u_email=htmlentities($_POST['u_email']);
$u_country=htmlentities($_POST['u_country']);
$u_gender=htmlentities($_POST['u_gender']);
$u_birthday=htmlentities($_POST['u_birthday']);
$update="update users set f_name='$f_name' ,l_name='$l_name' ,user_name='$u_name',
describe_user='$describe_user',Relationship='$Relationship_status',user_pass='$u_pass',
user_email='$u_email',user_country='$u_country',user_gender='$u_gender',user_birthday='$u_birthday' where id='$id'";
$run=mysqli_query($con,$update);

if($run){
								echo"<script>alert ('profile is updated')</script>";
									echo "<script>window.open('edit_profile.php?u_id=$id' , '_self')</script>";
							}
							else{
	echo" <script >alert ('Error')</script>";
}


}
?>