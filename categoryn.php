<?php session_start();
if($_SESSION["em"] != 2){
	header('Location:newlogin1.php');
    exit();
}
?>
<html>
    <head>
        <title>category</title>
        <link rel="stylesheet" href="css\category.css">

    </head>
    <body>
        <div class="catediv" id="catediv" >
            <br>
            <h1 class="cateh1">find your choice</h1>
            <div class="catediv1">
                <a class="catea1" href="iphone.php"><img class="cateip" src="category\ipwall.jpg"/>
                <div class="desc">iphones</div></a>
            </div>
            <div class="catediv1">
                <a class="catea1" href="macbook.php"><img class="cateip" src="category\macwall2.jpg"/>
                <div class="desc">mackbooks</div></a>
            </div>
            <!--<div class="catediv1">
                <a class="catea1" href="#"><img class="cateip" src="category\iwall1.jpg"/>
                <div class="desc">iwatches</div></a>
            </div>-->
        </div>
        
    </body>
</html>