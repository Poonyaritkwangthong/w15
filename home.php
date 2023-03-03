<?php
session_start();
if(!isset($_SESSION["username"]))
   header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="head1.css">
</head>
<body>
  <?php
  include 'menu.php';
  ?><br><br>
  <div class="content text-center text-4xl">
    <h1>SAMPLE WORKS</h1>
  </div><br>
<div class="main">
  <div class="slide">
    <figure>
     <img src="/6414421006/Project/image/anime1.webp">
     <img src="/6414421006/Project/image/man1.webp">
     <img src="/6414421006/Project/image/car1.jpg">
     <img src="/6414421006/Project/image/view1.jpg">
     <img src="/6414421006/Project/image/anime1.webp">
    </figure>
  </div>
</div><br>
    <div class="footer">
      <div class="ft-1 text-center text-2xl">
         <h1>I want everyone to see the work.</h1>
      </div>
      <div class="ft-2 text-center text-2xl">
         <p1>that others create from imagination and happiness</p1>
      </div>
    </div>  
  </body>
  </html>