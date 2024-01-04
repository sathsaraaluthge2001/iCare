<?php 
	if(isset($_POST["btndelete"])){

$productid=$_POST["proid"];
//connect the database
$con=mysqli_connect("localhost","root","","icare");

//error handling
if(!$con){
	die("Sorry, We are facing a technical issue");
}


//sql query
$sql="DELETE FROM `macproduct` WHERE `productid`='".$productid."';";

//execute the query against the database
if(mysqli_query($con,$sql)){
	header('Location:macbook.php');
}
	
}
	?>