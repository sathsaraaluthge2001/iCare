<html>
    <head>
        <title>iphones</title>
        <link rel="stylesheet" href="css\iphone.css">
        <link rel="stylesheet" type="text/css" href="css\ip11.css">
        <style>
            .hed{
                color: aliceblue;
                text-align: center;
                font-size: 60px;
            }

            .hed5{
                color: aliceblue;
            }
        </style>
    </head>
    <body>
        
        <div class="ip11div">
            <h1 class="hed">iphones</h1>

            <br>
            <?php

            $con=mysqli_connect("localhost","root","","icare");
            //error handling
            if(!$con){
	        die("Sorry, We are facing a technical issue");
            }

            $sql="SELECT * FROM `product` ";

            $result=mysqli_query($con,$sql);

            //create a session 
	        while($raw = mysqli_fetch_assoc($result)){

            ?>
             <div class="ip11div2">
                 <br>
                 <div class="waldiv">
                     <h2 class="h2ip"><?php   echo $raw["productname"]; ?></h2>
                     <img class="ip11" src="<?php   echo $raw["productimage"]; ?>">
                     
                 </div>
                 <div class="abosecp">
                     <h2 class="abh2ip"><?php   echo $raw["productname"]; ?></h2>
                     <h6 class="hed5">product Id: <?php   echo $raw["productid"]; ?></h6>
                     <p class="pdivip">
                     <?php   echo $raw["productdescription"]; ?>
                     </p>
                     <hr>
                     <br>
                     <form method="post" action="">
                         <p class="pp">Storage:</p>
                         <select class="chst">
                             <option id="ops1">128GB</option>
                             <option id="ops2">256GB</option>
                             <option id="ops3">512GB</option>
                             <option id="ops4">1TB</option>
                         </select>
                         <p class="ppp">Color:</p>
                         <select class="chcl">
                             <option class="oo" id="opc1">Black</option>
                             <option id="opc2">White</option>
                             <option id="opc3">Purple</option>
                             <option id="opc4">Yellow</option>
                             <option id="opc5">red</option>
                             <option id="opc6">Green</option>
                         </select>
                         <h2 class="h123">$<?php   echo $raw["productprice"]; ?></h2>
                         <div class="sudi">
                         
                         <input type="submit" class="subad" id="subad" value="🛒 add to cart">
                         <input type="submit" class="subad1" id="subad1" value="🤑 buy">
                         </div>
                     </form>
                 </div>
             </div>
             <?php
	           }
	         mysqli_close($con);//close the connection
		     ?>
         </div>
    </body>
</html>