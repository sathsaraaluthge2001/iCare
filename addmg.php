<?php session_start();
if(isset($_POST["subm"])){
$usernm=$_POST["usnm"];
$userem=$_POST["usem"];
$msg=$_POST["usmsg"];


                    //connect the database
 $con=mysqli_connect("localhost","root","","icare");

                    //error handling
 if(!$con){
   die("Sorry, We are facing a technical issue");
 }

$sql="INSERT INTO `massege` (`usernm`, `userem`, `msdis`) VALUES ('".$usernm."', '".$userem."', '".$msg."');";

//execute the query against the database
if(mysqli_query($con,$sql)){
	echo "massege upload successfully";
    }
    else{
	      echo "oops something is wrong";
        }		

}

?>