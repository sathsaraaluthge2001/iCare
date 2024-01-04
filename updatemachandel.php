<?php session_start();
	if(isset($_POST["btnupdate1"])){
//read the value user given and assign to variable
$productid=$_POST["proid"];
$productname=$_POST["proname"];
$productprice=$_POST["proprice"];
$productdes=$_POST["prodes"];

		
		if(!file_exists($_FILES['proimage']['tmp_name']) || 
		  !is_uploaded_file($_FILES['proimage']['tmp_name']))
		{ 
			$image = $_SESSION["proimage"];
		}
		else{
		$image="uploads/".basename($_FILES["proimage"]["name"]);
		move_uploaded_file($_FILES["proimage"]["tmp_name"],$image);
		}

//connect the database
$con=mysqli_connect("localhost","root","","icare");

//error handling
if(!$con){
	die("Sorry, We are facing a technical issue");
}


//sql query
$sql="UPDATE `macproduct` SET `productname`='".$productname."',`productprice`='".$productprice."',`productdescription`='".$productdes."',`productimage`='".$image."' WHERE `macproduct`.`productid`='".$productid."';";

//execute the query against the database
if(mysqli_query($con,$sql)){
	header('Location:macbook.php');
}
		


}
?>