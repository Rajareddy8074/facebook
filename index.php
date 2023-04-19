<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>THE NETWORK BOOK</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input[type="text"]{
            visibility: hidden;
        }
        </style>
</head>
<body>
    <?php echo "Welcome , {$_SESSION['name']}";?>
    <nav>
        <div class="nav-left">
            <img src="logo.png" width="100" height="100" class="logo">
            <ul>
                <li><img src="notifi.png" width="50" height="50"></li>
                <li><img src="inbox.png" width="50" height="50"></li>
                <li><img src="video.png" width="50" height="50"></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="search.jpg" width="10" height="10">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon">
                <img src="ramcharan.jpg" height="100" width="100">
                <a href="logout.php">Logout</a>

                
            </div>

        </div>
    </nav>
    
    <div class="container">
    <a href="file.php">Upload photo</a><br>
    <?php include 'image-gallery.php'; ?>
        <!--<div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><img src="news.png" height="50" width="50">Latest News</a>
                <a href="#"><img src="friends.jpg" height="50" width="50">Friends</a>
                <a href="#"><img src="group.png" height="50" width="50">group</a>
                <a href="#"><img src="marketplace.png" height="50" width="50">Marketplace</a>
                <a href="#"><img src="watch.jpg" height="50" width="50">watch</a>
                <a href="#">see more</a>   
            </div> 
        </div>-->
        <div class="main-content">
            
            
            <!--<div class="center-image">
                <img src="ramcharan.jpg" alt="Image" width="300" height="300">
                <div class="like-dislike">
                    <button id="like-button" onclick="button()"><img src="like.jpeg" alt="Like"></button>
                    <button id="dislike-button" onclick="button()" style="margin-left:10px;"><img src="dislike.png" alt="Dislike"></button>
                  </div>-->
                  
            </div>
        </div>
        <!--
        <div class="right-sidebar">
            <h4>Events</h4>
            <a href="#" style="margin-left:200px;">See All</a>
    
            <h3>5</h3>
            <span>Apirl</span>
            <h4>Social Media</h4>
            <p>Raja Reddy</p>
            <a href="#">More info</a>
        </div>
        //-->
        </div>
       
    
         
    </body>
    </html>