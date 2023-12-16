<?php
// Database configuration
$servername = "vishal.mysql.database.azure.com"; // e.g., "localhost"
$username = "vishal";
$password = "Vigo@4242";
$dbname = "info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can perform database operations here

// Close the connection when done
$conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Vishal Shirsath</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vishal Shirsath software developer, ethical hacker ">
    <meta name="keywoards" content="vishal shirsath, Software Developer, Ethical Hacker.">
    <meta name="author" content="vishal shirsath">
    <meta name="robots" content="index, follow"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
      </style>
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>
<body class="w3-black">
<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Vishal Shirsath.</h1>
    <p><h2><i class=" w3-text-light-green"></i>Software Developer, Ethical Hacker </h2></p>
    <img src="photo01.png" alt="boy" class="w3-image" width="992" height="1108">
  </header>
  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-white w3-padding-16" id="about">
   
    <h2 class="w3-text-light-white">My Name</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>A Software Engineering graduate who is seeking to find the opportunity to work in a fun and
challenging work environment that will encourage him to improve and learn new and
necessary skills as well as be motivated by the company to do his best for the sake of helping
himself and the company advancement in the software engineering industry.
    </p>
    
    
