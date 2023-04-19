<div class="like-dislike">
  <form method="post">
    <input type="hidden" name="name" value="ramcharan.jpg">
    <button type="submit" name="like"><img src="like.jpeg" alt="Like"></button>
    <button type="submit" name="dislike"><img src="dislike.png" alt="Dislike"></button>
  </form>
  <?php
  // Connect to the database
  $servername = "localhost";
  $password = "";
  $dbname = "raja";

  $conn = new mysqli($servername, 'raja', $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Query the database for the like count
  $sql = "SELECT COUNT(*) AS count FROM likes WHERE name = 'ramcharan.jpg' AND action = 'like'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $likeCount = $row['count'];

  // Query the database for the dislike count
  $sql = "SELECT COUNT(*) AS count FROM likes WHERE name = 'ramcharan.jpg' AND action = 'dislike'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $dislikeCount = $row['count'];

  // Close connection
  $conn->close();
  ?>
  <span><?php echo $likeCount; ?> likes</span>
  <span><?php echo $dislikeCount; ?> dislikes</span>
</div>
