<?php
session_start();
$servername = "localhost";
$password = "";
$dbname = "raja";
$conn = mysqli_connect($servername, 'root', $password, $dbname);
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);
if(isset($_FILES["images"])){
    $fn = $_FILES["images"]["name"];
    $ft = $_FILES["images"]["type"];
    $fs = $_FILES["images"]["size"];
    $ftp = $_FILES["images"]["tmp_name"];
    $id=$_SESSION['name'];
    echo "File Name:".$fn." <br>"."File Type:".$ft . "<br>"."FIle Size:".$fs."<br>"."Temp:".$ftp;
    if (!file_exists($target_file)) { 
        move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
        $sql = "insert into image(id,filename) VALUES('$id','$fn')";
        $result = mysqli_query($conn,$sql);
        echo "$id, $fn";
    }
}
echo "successful";
header("Location:index.php");
?>