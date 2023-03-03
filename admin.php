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
     <!-- Bootstrap CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-black">
    <?php
    include 'admin_menu.php';
    ?>
    <div class="container">
        <br><br>
    <div class="text-white text-7xl text-center" >
Welcome To Admin
</div>
<br><br>
<div class="text-white text-4xl flex justify-center">
<h>Admin:</h>
<?php
if(isset($_SESSION["firstname"])){
    echo "<div class=''>";
    echo $_SESSION["firstname"] ." ". $_SESSION["lastname"] ;
    echo "</div>";
}

?>
</div>
<br>
</div>
</body>
</html>