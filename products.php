<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store|Products</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check_if_added.php';
        ?><br><br><br><br>
        
        
        <div class="container">
            <center>
            
            <div class="jumbotron">
                <h1>Welcome to our Store!</h1>
                <p>We have the best all aroound experience.#ios</p>
                </center>
            </div>
        </div>
        <div class="container">
             <div class="row">
                 <div class="col-md-3 col-sm-6" >
                             <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n1.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone 11 </h2>
                                        <p>Price:Rs. 68,300.00</p>
                                    </div>
                         <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button><p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  

                                        </center>
                                    </div>
                        </div>
                               <div class="col-md-3 col-sm-6">
                           <a href="products.php#ios"> <div class="thumbnail">
                                     <img src="img/n2.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone 11 Pro</h2>
                                        <p>Price:Rs. 1,06,600.00</p>
                                    </div>
                                              
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(2)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                        </center>
                                    </div>
                        </div>
                                <div class="col-md-3 col-sm-6">
                                     <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n3.jpg">
                                    <center>
                                    <div class="caption">
                                        <h3>Iphone 11 Pro Max</h3>
                                        <p>Price:Rs. 1,17,100.00</p>
                                    </div>
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  


                                    </center>
                                    </div>
                        </div>
                                           <div class="col-md-3 col-sm-6">
                                    <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n4.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone XR</h2>
                                        <p>Price:Rs. 53,000.00</p>
                                    </div>
                                       <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                       
                                        </center>
                                    </div>
                        </div>
                                           </div>
                                        
                                        
                                        <div class="row">
									<div class="col-md-3 col-sm-6">
                            <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n5.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone SE</h2>
                                        <p>Price:Rs. 43,000.00</p>
                                    </div>
                                       <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                        
                                        </center>
                                    </div>
                        </div>
                                <div class="col-md-3 col-sm-6">
                            <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n6.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone X</h2>
                                        <p>Price:Rs. 70,000.00</p>
                                    </div>
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  

                                        </center>
                                    </div>
                        </div>
                                <div class="col-md-3 col-sm-6">
                            <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n7.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone XS</h2>
                                        <p>Price:Rs. 97,400.00</p>
                                    </div>
                                   <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(7)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  

                                        </center>
                                    </div>
                        </div>
                                <div class="col-md-3 col-sm-6">
                            <a href="products.php#watches"><div class="thumbnail">
                                    <img src="img/n8.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone XS Max</h2>
                                        <p>Price:Rs. 99,900.00</p>
                                    </div>
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(8)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                        </center>
                                    </div>
                        </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                            <a href="products.php#ios"><div class="thumbnail">
                                    <img src="img/n9.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone 8</h2>
                                        <p>Price:Rs. 37,499.00</p>
                                    </div>
                                   <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(9)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  

                                        </center>
                                    </div>
                        </div>
                                <div class="col-md-3 col-sm-6">
                            <a href="products.php#shirts"><div class="thumbnail">
                                    <img src="img/n10.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone 8 Plus</h2>
                                        <p>Price:Rs. 49,900.00</p>
                                    </div>
                               <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(10)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                        
                                        </center>
                                    </div>
                        </div>
                                 <div class="col-md-3 col-sm-6">
                            <a href="products.php#shirts"><div class="thumbnail">
                                    <img src="img/n11.jpg">
                                    <center>
                                    <div class="caption">
                                        <h3>Iphone 7</h3>
                                        <p>Price:Rs. 33,999.00</p>
                                    </div>
                                    <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(11)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                        </center>
                                    </div>
                        </div>
                                <div class="col-md-3 col-sm-6">
                            <a href="products.php#shirts"><div class="thumbnail">
                                    <img src="img/n12.jpg">
                                    <center>
                                    <div class="caption">
                                        <h2>Iphone 7 Plus </h2>
                                        <p>Price:Rs. 36,400.00</p>
                                        </div>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
                                <p><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Buy Now</button></p> 
                                <?php 
                            } else { 
                                 
                                if (check_if_added_to_cart(12)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else { 
                                    ?> 
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                                } 
                            } 
                            ?>  
                                        </center>
                                    </div>
                                </div>
                                </div>
                                 </div><br><br><br>
                                
<?php
include 'includes/footer.php';
?>
                    
           
    </body>
</html>
        
