<?php session_start();
if(isset($_POST["btnlog"])){
//create variables and assign values
$admin=$_POST["adminid"];
$password=$_POST["adminps"];

//connect with database
$con=mysqli_connect("localhost","root","","icare");

if(!$con){
    die("Sorry, We are facing a technical issue");
}
//sql query
$sql="SELECT * FROM `admin` WHERE `adminid`='".$admin."' AND `password`='".$password."';"; 
//execute the query against the database
$result = mysqli_query($con, $sql);


  if ($result) {
    if (mysqli_num_rows($result) > 0) {

        // Fetch the name and contact number from the result

        $_SESSION["admin"]=2;
    }
  }

if ($result) {
    if (mysqli_num_rows($result) > 0) {

        header('Location: admi1.php');
    }
    else{
        header('Location: adminlog.html');
    }
}

}
?>