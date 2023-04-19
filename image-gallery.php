<?php

  $servername = "localhost";
  $password = "";
  $dbname = "raja";
  
  $conn = mysqli_connect($servername, 'root', $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $id = $_SESSION['name'];
  
  // Query the database for the like count
  $sql = "SELECT * FROM image";
  $result = mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($result)){
    $s=$row["filename"];
    echo "<img src='images/$s' style='height:300px;width:300px;'>";
    $sql = "SELECT * FROM likes WHERE name = '$s' AND action = 'like'";
    $r = mysqli_query($conn,$sql);
    $like =mysqli_num_rows($r) ;

  // Query the database for the dislike count

  $sql = "SELECT * FROM likes WHERE name = '$s' AND action = 'dislike'";
  $r = mysqli_query($conn,$sql);
  $dislike =mysqli_num_rows($r) ;
    echo "Like:{$like} Dislike:{$dislike}<br>";
    echo "<form action='like.php' method='post'><input type='submit' name='like' value='like'><input type='text' name='lname' value='$s'></form>";
    echo "<form action='dislike.php' method='post'><input type='submit' name='dislike' value='dislike'><input type='text' name='dname' value='$s'></form>";
  }
  ?>
