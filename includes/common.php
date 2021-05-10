<?php
$conn=mysqli_connect("localhost","root","","store","3308")
or die(mysql_error($conn));
if(!isset($_SESSION)){
    session_start();
}
?>

