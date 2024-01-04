<?php session_start();
if($_SESSION["admin"] != 2){
	header('Location:adminlog.html');
    exit();
}
?>
<html>
    <head>
        <title>view massege</title>
        <link rel="stylesheet" href="css/viewmsg.css">
    </head>
    <body>
        <div class="msgdiv1">
            <br>
            <h1 class="masseges">masseges</h1>
            <?php

            $con=mysqli_connect("localhost","root","","icare");
            //error handling
            if(!$con){
	        die("Sorry, We are facing a technical issue");
            }

            $sql="SELECT * FROM `massege` ";

            $result=mysqli_query($con,$sql);

            //create a session 
	        while($raw = mysqli_fetch_assoc($result)){

            ?>


            <div class="msg">
                <hr>
                <h2 class="usernm">user name:<?php   echo $raw["usernm"]; ?></h2>
                <br><br>
                <h2 class="usernm">email:<?php   echo $raw["userem"]; ?></h2>
                <br><br>
                <p class="msgu"><?php   echo $raw["msdis"]; ?></p>
                <hr>
            </div>
            <?php
	           }
	         mysqli_close($con);//close the connection
		     ?>
        </div>
    </body>
</html>