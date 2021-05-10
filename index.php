<?php
require("includes/common.php");

if(isset($_SESSION["email"]))
{
header('location:products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
         <?php
        include 'includes/header.php';
        ?>
        
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Apple Store</h1>
                            <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-default btn-lg active">Shop Now</a>
                        
                    </center>
                </div>
            </div>
           
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <center>
                                
                            <h2 style="color:grey"><b>Choose From Wide Range Of iPhones</b></h2>
                        </center>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            
                               <div class="thumbnail">
                                    <img src="img/1.jpg" alt="iphone x" >
                                        <div class="caption">
                                             <h3>Iphone X </h3>
                                        <p>Price:Rs. 70,000.00</p> 
					<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                          
                               <div class="thumbnail">
                                    <img src="img/3.jpg" alt="iphone xr" >
                                        <div class="caption">
                                       <h3>Iphone XR </h3>
                                        <p>Price:Rs. 53,000.00</p> 
			<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                       
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                           
                               <div class="thumbnail">
                                    <img src="img/5.jpg" alt="iphone 11 pro" >
                                        <div class="caption">
                                           <h3>Iphone 11Pro </h3>
                                        <p>Price:Rs. 1,10,000.00</p> 
				<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            
                               <div class="thumbnail">
                                   
                                <img src="img/se.jpg" alt="iphone se" >
                                        <div class="caption">
                                          <h3>Iphone SE </h3>
                                        <p>Price:Rs.42,300</p> 
				<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>

           
            </div>
        
<?php
include 'includes/footer.php';
?>
    </body>
</html>
