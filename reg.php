<?php session_start();
if(isset($_POST["btnSubmit"])){
//read the value user given and assign to variable
$name=$_POST["name"];
$contactno=$_POST["contactno"];
$email=$_POST["email"];
$password=$_POST["password"];

//connect the database
$con=mysqli_connect("localhost","root","","icare");

//error handling
if(!$con){
	die("Sorry, We are facing a technical issue");
}


//sql query
$sql="INSERT INTO `user` (`name`, `email`, `password`, `contactno`) VALUES ('".$name."', '".$email."', '".$password."', '".$contactno."'); ";

//execute the query against the database
$result=mysqli_query($con,$sql);

header('Location: newlogin1.php');

}


?>