<?php session_start();
	if(isset($_POST["buserupdate"])){
//read the value user given and assign to variable
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$contactno=$_POST["contactno"];


//connect the database
$con=mysqli_connect("localhost","root","","icare");

//error handling
if(!$con){
	die("Sorry, We are facing a technical issue");
}


//sql query
$sql="UPDATE `user` SET `name`='".$name."',`password`='".$password."',`contactno`='".$contactno."' WHERE `user`.`email`='".$email."';";

//execute the query against the database
if(mysqli_query($con,$sql)){
	header('Location:userpage.php');
}
		


}
?>