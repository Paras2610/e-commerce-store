<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>E-Store|Setting</title>
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    
	</head>
	<body>
		<?php
			require './includes/header.php';
                        ?>
            
		<div class="container">
            <div class="row row_style2">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <br><br><br><h3>Change Password</h3>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="newpassword" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="renewpassword" required="true">
                        </div>
                        <?php
                        if(isset($_GET['msg']))
                            echo $_GET['msg']."<br>";
                        ?>
                        <button class="btn btn-primary" type="submit">Change
                        </button>
                    </form>
                </div>
            </div>
                </div>
	<div class="footer1">
         <?php
         include 'includes/footer.php';
         ?>
         </div>
	</body>
</html>








