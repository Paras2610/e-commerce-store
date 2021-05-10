  
<?php
require("includes/common.php");

if (!isset($_SESSION["email"])) {
    header('location: index.php');
}
$old=$_POST['oldpassword'];
$new=$_POST['newpassword'];
$ret=$_POST['renewpassword'];
$user_id=$_SESSION['user_id'];
if(strcmp($new,$ret)){
    header('location:setting.php?msg=passwords do not match');
}
elseif(strlen($ret)<6 or strlen($new)<6)
{
    header('location:setting.php?msg=password must be 6 characters long');
}       
else{
    $query="select password from users where id=$user_id";
    $qr_res=mysqli_query($conn,$query) or die(mysqli_error($conn));
    $qr_res=mysqli_fetch_array($qr_res);
    if($qr_res['password']!=$old)
    {
        header('location:setting.php?msg=old password incorrect. Try again.');
    }
    else{
        
        $query="update users set password ='$new' where id=$user_id";
        $qr_res=mysqli_query($conn,$query) or die(mysqli_error($conn));
        header('location:setting.php?msg=PASSWORD CHANGED');    
    }
}
?>