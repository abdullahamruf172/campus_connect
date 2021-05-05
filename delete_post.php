<?php
$con = mysqli_connect("localhost","root","","sdp3") or die("Connection was not established");

if(isset($_GET['post_id'])){
	$post_id=$_GET['post_id'];
	$delete_post = "delete from posts where post_id='$post_id'";
	$run_delete = mysqli_query($con, $delete_post);
	if($run_delete){
		echo" <script> ('A post has been deleted ...')</script>";
	echo" <script> window.open('../profile.php','_self')</script>";
	}
}
?>