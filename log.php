<?php session_start();
if(isset($_POST["btnSubmit"])){
//create variables and assign values
$email=$_POST["email"];
$password=$_POST["password"];
$name=$_POST["name"];
$contactno=$_POST["contactno"];

//connect with database
$con=mysqli_connect("localhost","root","","icare");

if(!$con){
    die("Sorry, We are facing a technical issue");
}
//sql query
$sql="SELECT * FROM `user` WHERE `email`='".$email."' AND `password` ='".$password."' "; 
//execute the query against the database
$result = mysqli_query($con, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {

        // Fetch the name and contact number from the result
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $contactno = $row['contactno'];

        $_SESSION["em"]=2;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["contactno"] = $contactno;
        header('Location: icare.php');
    }
    else{
        header('Location: newlogin1.php');
    }
}

}
?>