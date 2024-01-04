<?php session_start();
if($_SESSION["admin"] != 2){
	header('Location:adminlog.html');
    exit();
}
?>
<html>
    <head> 
        <title>Admin Icare</title>
        <link rel="stylesheet" href="css\admi3.css">
        
    </head>
    <body>
    <?php
                 
                 // Check if the user clicked on the logout button
                 if (isset($_POST["btnlogout"])) {
                    // Destroy the session
                    session_destroy();
                    // Redirect to the login page
                    header('Location: adminlog.html');
                    exit();
                    }
                    ?>
        <div class="di1">
            <nav class="nav1">
                <h2 class="name"><span>iCa</span>re Admin</h2>
                <ul class="ul1">
                    <h2 class="iphone">iphones</h2>
                    <a href="addproduct.php"> <li>Add products</li></a>
                    <a href="deleteproduct.html"><li>Delete products</li></a>
                    <a href="updateproduct.html"><li>Update products</li></a>
                    <a href="iphone.php"><li>View products</li></a>
                    <div class="mangeuser">
                       <!--- <div class="btndiv">
                           <a href="#"><input type="button" name="btndelete" class="btndelete" value="Delete Users"></a>
                        </div>-->
                    </div>
                </ul>
                <ul class="ul1">
                    <h2 class="iphone">macbooks</h2>
                    <a href="addproductmc.php"> <li>Add products</li></a>
                    <a href="deletemac.html"><li>Delete products</li></a>
                    <a href="updatemac.html"><li>Update products</li></a>
                    <a href="macbook.php"><li>View products</li></a>
                    <div class="mangeuser">
                       <!--- <div class="btndiv">
                           <a href="#"><input type="button" name="btndelete" class="btndelete" value="Delete Users"></a>
                        </div>-->
                    </div>
                </ul>
                
            </nav>
            <div class="blogout">
                <div class="btndiv">
                    <form action="admi.php" method="post"> <input type="submit" name="btnlogout" class="btnlogout" value="Log Out"></form>
                </div>
            </div>
            <div class="div2">
                <div class="divnext">
                    <h2 class="he21">Wellcome to <br> Admin page</h2>  
                     
                </div>

            </div>
            <div class="bmg">
                <div class="btndiv1">
                    <form action="viewmsg.php" method="post"><input type="submit" name="btnlogout" class="btnlogout1" value="View masseges"></form>
                </div>
            </div>
            <div class="bmg2">
                <div class="btndiv2">
                    <form action="deleteuseradmin.html" method="post"> <input type="submit" name="btnlogout" class="btnlogout2" value="Delete user"></form>
                </div>
            </div>
            <div class="bmg3">
                <div class="btndiv3">
                    <form action="addadmin.php" method="post"> <input type="submit" name="btnlogout" class="btnlogout3" value="Add admin"></form>
                </div>
            </div>
            
        </div>
    </body>
</html>