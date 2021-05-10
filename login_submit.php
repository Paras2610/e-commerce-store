   <?php
    require ("includes/common.php");
    $email=$_POST['email'];
    $email = mysqli_real_escape_string($conn,$email);
    $password=$_POST['password'];
    $password = mysqli_real_escape_string($conn, $password);
    

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $query_result = mysqli_query($conn, $query) or die($mysqli_error($conn));
    $num=mysqli_num_rows($query_result);

    if($num == 0){
        echo "User account does not exists.";
        header('location: login.php');
    }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];

        
        header('location: products.php');
    }
?>