<?php session_start();
if($_SESSION["admin"] != 2){
	header('Location:adminlog.html');
    exit();
}
?>
<html>
    <head>
        <title>add admin</title>
        <link rel="stylesheet" href="css/newlog.css">
        <style>
            .tb{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="di1">
            <form method="post" action="addadmin.php" class="fm1" enctype="multipart/form-data">
                <table class="tb" width="500px" heigth="500px">
                    <tr>
                        <td colspan="2"> <img class="imglogreg" src="logo2.jpg"><h2 class="namelogreg"><span>iCa</span>re</h2></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h3 class="h3logreg">Add admin Admin</h3></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Admin ID</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" class="in" name="adminid" id="em" placeholder="enter Admin ID..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Password</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" class="in" name="adminps" id="em" placeholder="enter Password..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btnlog" id="sub" class="sub" value="add admin">
                            <input type="reset" name="sub" id="sub" class="sub" value="Cancel">                            
                        
                        </td>
                    </tr>
                </table>
                <?php 
                if(isset($_POST["btnlog"])){
                    $adminid=$_POST["adminid"];
                    $adminps=$_POST["adminps"];

                    //connect the database
                    $con=mysqli_connect("localhost","root","","icare");

                    //error handling
                if(!$con){
	            die("Sorry, We are facing a technical issue");
                }

                $sql="INSERT INTO `admin` (`adminid`, `password`) VALUES ('".$adminid."', '".$adminps."');";

                //execute the query against the database
                if(mysqli_query($con,$sql)){
	               header('Location:admi1.php');
                }
               else{
	              echo "oops something is wrong";
                }		

                }

                ?>
            </form>
        </div>
    </body>
</html>