<?php session_start();
if($_SESSION["em"] != 2){
	header('Location:newlogin1.php');
    exit();
}
?>
<html>
    <head>
        <title>about</title>
        <link rel="stylesheet" href="css\aboutn.css">

    </head>
    <body>
        <div class="about" id="about">
            <nav class="navabo">
                <!--<img class="imgabo" src="logo2.jpg">-->
                <h2 class="nameabo">our story</h2>
            </nav>
            <div class="desabo">
                <img class="disimgabo" src="logo2.jpg">
                <div class="desabopara">
                    At iCare, we believe that everyone deserves a high-quality mobile phone experience without breaking the bank.
                    That's why we offer a range of affordable smartphones that don't compromise on performance or features.
                    Our phones are designed with the latest technology and built to last, so you can enjoy a reliable and fast connection wherever you go.<br><br>
        
                    Whether you're looking for a basic phone for calls and texts or a smartphone for browsing the web and taking photos, we've got you covered.
                    Our phones come with generous data plans and flexible payment options, so you can choose the plan that suits your needs and budget.
                    Plus, our friendly customer service team is always on hand to help you with any questions or issues you may have.<br><br>
        
                    At iCare, we're committed to providing our customers with the best possible mobile phone experience.
                    We strive to be transparent and honest in all our dealings, and we're always looking for ways to improve our products and services.
                    So why not give us a try and see for yourself why iCare is the smart choice for your mobile phone needs?
                </div>
            </div>
          </div>
    </body>
</html>