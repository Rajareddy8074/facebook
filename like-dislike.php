<?php

  $servername = "localhost";
  $password = "";
  $dbname = "raja";

  $conn = mysqli_connect($servername, 'root', $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $like=0;
  $dislike=0;
  // Query the database for the like count
  $sql = "SELECT COUNT(*)  FROM likes WHERE name = 'ramcharan.jpg' AND action = 'like'";
  $result = mysqli_query($conn,$sql);
  $like=mysqli_num_rows($result);

  // Query the database for the dislike count
  $sql = "SELECT COUNT(*) AS count FROM likes WHERE name = 'ramcharan.jpg' AND action = 'dislike'";
  $result = $conn->query($sql);
  $dislike=mysqli_num_rows($result);
  echo $like;
  echo $dislike;
  ?>
