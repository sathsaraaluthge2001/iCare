<?php 
	if(isset($_POST["btndelete"])){

$email=$_POST["proid"];
//connect the database
$con=mysqli_connect("localhost","root","","icare");

//error handling
if(!$con){
	die("Sorry, We are facing a technical issue");
}


//sql query
$sql="DELETE FROM `user` WHERE `email`='".$email."';";

//execute the query against the database
if(mysqli_query($con,$sql)){
	header('Location:admi1.php');
}
	
}
	?>