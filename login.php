<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","raja");
    $un = $_POST['username'];
    $pw = $_POST['password'];
    if($conn){
        $query = mysqli_query($conn,"select * from login where Username='$un' and Password='$pw'");
    if(mysqli_num_rows($query)){
        $_SESSION['name']=$un ;
        header("Location:index.php");
    }
    echo "User doesnot exists";
}
?>