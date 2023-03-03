<?php
   session_start();
   if(!isset( $_SESSION["username"]))
   $show=header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>
<body class="bg-black">
<?php
include 'admin_menu.php';
?><br><br>
    <section>
  <div class="container  ">
  <div class="text-center text-white text-3xl">
 SHOW PRODUCT
</div><br>

<div class="grid grid-cols-3 gap-10 mt-10 w-3/4 mx-auto">
      <?php
                                include 'condb.php';
                                $sql="SELECT * FROM product,type WHERE product.type_id = type.type_id";
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {

                                ;
                            ?>
<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
  <img class="w-full" src="image/<?php echo $row["image"];?>" alt="Sunset in the mountains">
  <div class="px-6 py-4">
  <h2 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo $row["type_name"];?></h2>
  <h2 class="text-gray-900 title-font text-xl font-medium"><?php echo $row["pro_name"];?></h2>
    </p><br><br>
          <a href="detail1.php?id=<?=$row['pro_id']?>" class="text-white bg-gradient-to-r from-black via-black to-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-1 py-3 text-center">ดูรายละเอียด</a>
        </div>
      </div>
      <?php
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
    </div>
    </div>

</section>

</body>
</html>
