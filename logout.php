<?php
require("includes/common.php");

if(!isset($_SESSION["email"]))
{
header('location:index.php');
}
else{
    session_unset();
    session_destroy();
}
?>
<head>
        <title>E-Store|Logout</title>
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
        

        
        <div class="container"><br><br><br><br><br><br>
            <center>
            
                <div class="jumbotron">
                <h1>You have successfully logged out. </h1>
                <p><a href="index.php">Click here</a> to purchase any other item. </p>
            </center>
			</div>
			</div><br><br><br><br>
         <div class="footer1">
         <?php
         include 'includes/footer.php';
         ?>
         </div>
    </body>
</html>
         


