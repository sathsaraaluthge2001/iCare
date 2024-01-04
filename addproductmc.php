<html>
    <head>
        <title>add product</title>
        <link rel="stylesheet" href="css/newlog.css">
    </head>
    <body>
        <div class="di1">
            <form method="post" action="addproductmc.php" class="fm1" enctype="multipart/form-data">
                <table class="tb" width="500px" heigth="500px">
                    <tr>
                        <td colspan="2"> <img class="imglogreg" src="logo2.jpg"><h2 class="namelogreg"><span>iCa</span>re</h2></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h3 class="h3logreg">Add to Product</h3></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Product ID</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" class="in" name="proid" id="em" placeholder="enter Product ID..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Product Name</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" class="in" name="proname" id="pas" placeholder="enter Product Name..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Product Image</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" class="in1" name="proimage" id="em" placeholder="Product image..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Product Price</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" class="in" name="proprice" id="em" placeholder="enter Product Price..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Product Description</label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="textarea" class="in" name="prodes" id="pas" placeholder="enter Product Description..." required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btnadd" id="sub" class="sub" value="ADD">
                            <input type="reset" name="sub" id="sub" class="sub" value="Cancel">                            
                        
                        </td>
                    </tr>
                </table>
                <?php 
                if(isset($_POST["btnadd"])){
                    $productid=$_POST["proid"];
                    $productname=$_POST["proname"];
                    $productprice=$_POST["proprice"];
                    $productdes=$_POST["prodes"];
                    $image="uploads/".basename($_FILES["proimage"]["name"]);
		            move_uploaded_file($_FILES["proimage"]["tmp_name"],$image);

                    //connect the database
                    $con=mysqli_connect("localhost","root","","icare");

                    //error handling
                if(!$con){
	            die("Sorry, We are facing a technical issue");
                }

                $sql="INSERT INTO `macproduct` (`productid`, `productname`, `productprice`, `productdescription`, `productimage`) VALUES ('".$productid."', '".$productname."', '".$productprice."', '".$productdes."', '".$image."');";

                //execute the query against the database
                if(mysqli_query($con,$sql)){
	               echo "advertisment upload successfully";
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