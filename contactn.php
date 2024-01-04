<?php session_start();
if($_SESSION["em"] != 2){
	header('Location:newlogin1.php');
    exit();
}
?>
<html>
    <head>
        <title>contact us</title>
        <link rel="stylesheet" href="css\contactu.css"> 

    </head>
    <body>
        <div class="contactdiv" id="contactdiv">
            <section class="contactt">
                <div class="condiv">
                    <h1 class="conh1">contact us</h1>
                    <p class="conp">At iCare Phone Shop, we are always here to help you with your mobile phone needs.
                        Whether you have a question about our products, need assistance with your order, or have feedback to share, we welcome your inquiries.
                        You can contact us via email or phone, and our friendly and knowledgeable customer service team will be happy to assist you.
                        We value your feedback and strive to provide excellent customer service, so don't hesitate to reach out to us if you need any help or have any questions.</p>
                </div>
                <div class="container">
                    
                    <div class="contactinfo">
                        <div class="box">
                            <div class="icon"><img class="co" src="lo1.png"></div>
                            <div class="text">
                                <h3 class="conh3">Address</h3>
                                <p>452 marine drive,<br>colombo3</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><img class="co" src="cl1.png"></div>
                            <div class="text">
                                <h3 class="conh3">Phone</h3>
                                <p>076-2757670</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><img class="co" src="em1.png"></div>
                            <div class="text">
                                <h3 class="conh3">Email</h3>
                                <p>aluthgesathasara2001@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="conform">
                        <form class="forr"  id="formn1" action="addmg.php" method="post">
                            <h2 class="confh2">Send Message</h2>
                            <div class="inputbx">
                                <span class="consp">Full Name</span>
                                <input type="text" name="usnm" id="txt1" required="required" placeholder="<?php   echo $_SESSION["name"]; ?>">
                                
                            </div>
                            <div class="inputbx">
                                <span class="consp">Email</span>
                                <input type="email" name="usem" id="txt1" required="required" placeholder="<?php   echo $_SESSION["email"]; ?>">
                                
                            </div>
                            <div class="inputbx">
                                <span class="consp">Type your message</span>
                               <input type="textarea" required class="req" name="usmsg"></textarea>
                                
                            </div>
                            <div class="inputbx">
                                <input type="submit" name="subm" id="subm" value="Send">
                             </div>
                        </form>
                    </div>
                </div>
            </section>
         </div>
        
    </body>
</html>