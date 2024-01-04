
<html>
    <head>
        <title>my page</title>
        
    </head>
    <body>
           <h2 class="h21">
           <?php
                 session_start();

                 // Check if the user clicked on the logout button
                 if (isset($_POST["btnLogout"])) {
                    // Destroy the session
                    session_destroy();
                    // Redirect to the login page
                    header('Location: newlogin1.php');
                    exit();
                    }

                 // Check if the "name" key is set in the session
                 if (isset($_SESSION["name"])) {
                 // Access the name and contact number from the session
                 $name = $_SESSION["name"];
                 $contactno = $_SESSION["contactno"];

                 // Display the name and contact number
                 echo "Name: " . $name . "<br>";
                 echo "Contact Number: " . $contactno;
                 } else {
                    header('Location: newlogin1.php');
                    exit();
                 }
                 
                 
                ?>
                <form method="post" action="mypage.php">
            <input type="submit" name="btnLogout" value="Logout">
            <div><?php
             echo "Name: " . $name . "<br>";
            ?></div>
        </form>
           </h2>
    </body>
</html> 