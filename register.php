<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to database
    $servername = "localhost";
    $password = "";
    $dbname = "raja";
    $conn = mysqli_connect($servername, 'root', $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if username already exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $error_message = "Username already exists";
    } else {
        // Insert user data into database
        $sql = "INSERT INTO users (username, pwd, email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $sql)) {
            $success_message = "Registration successful";
        } else {
            $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    if (mysqli_query($conn, $sql)) {
        $success_message = "Registration successful";
        // Redirect to another website
        echo "<script> window.location.assign('fblogin.html'); </script>";
        exit();
    } else {
        $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
