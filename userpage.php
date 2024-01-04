<html>
    <head>
        <title>my page</title>
        <link rel="stylesheet" href="css\user.css">
    </head>
    <body>
            <?php
                 session_start();
                 // Check if the user clicked on the logout button
                 if (isset($_POST["blogout"])) {
                    // Destroy the session
                    session_destroy();
                    // Redirect to the login page
                    header('Location: newlogin1.php');
                    exit();
                    }

                if (isset($_POST["bdelete"])) {
                        // Destroy the session
                        $con=mysqli_connect("localhost","root","","icare");
                        // Redirect to the login page
                        if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        
                        $email = $_SESSION["email"];
                        $sql=" DELETE FROM `user` WHERE `email`= '$email' ; ";

                        if (mysqli_query($con, $sql)) {
                            // Destroy the session
                            session_destroy();
                            // Redirect to the login page
                            header('Location: newlogin1.php');
                            exit();
                        } else {
                            echo "Error deleting account: " . mysqli_error($connection);
                        }
                        
                        // Close the database connection
                        mysqli_close($connection);
                    }

                 // Check if the "name" key is set in the session
                 if (isset($_SESSION["name"])) {
                 // Access the name and contact number from the session
                 $name = $_SESSION["name"];
                 $contactno = $_SESSION["contactno"];
                 $email= $_SESSION["email"];
                 // Display the name and contact number
                 } else {
                    header('Location: newlogin1.php');
                    exit();
                 }     
            ?>
        <div class="div1">
            <div class="div2">
            <div class="loogimg">
                <img src="logo2.jpg" class="looimg"><h2 class="name"><span class="sp1">iCa</span>re</h2>
                <br>
            </div>
            </div>
            <br>
            <div class="div3">
                <form class="form2" method="POST" action="userpage.php">
                <table>
                    <tr>
                        <td>User name:</td>
                        <td class="td1"><section class="sec1"><?php echo " $name "; ?></section></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td class="td1"><section class="sec1"><?php echo " $email "; ?></section></td>
                    </tr>
                    <tr>
                        <td>Contact number:</td>
                        <td class="td1"><section class="sec1"><?php echo " $contactno "; ?></section></td>
                    </tr>
                </table>
                <hr>
                    <input type="submit" name="blogout" class="bsubmit" value="Log Out">
                    <input type="submit" name="bedit" class="bsubmit" value="Edit information" formaction="edituserinfo.html">
                    <input type="submit" name="bdelete" class="bsubmit" value="Delete account">
                </form>
             </div>
        </div>
    </body>
</html> 