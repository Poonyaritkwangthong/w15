<?php 
include "condb.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- bootstrap.css -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap.js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
<?php 
include 'menu.php';
?>
    <script>
        $(document).ready(function(){
    $(".mobile-nav i").click(function(){
        $(".site-nav-menu").toggleClass("mobile-menu");
    });
 });
    </script>
</div>
<!-- nav -->

  <div class="container px-5 py-24 mx-auto">
  <div class="h4 text-center text-black">
  รายละเอียดรูปภาพ
</div>
    <div class="lg:w-4/5 mx-auto flex flex-wrap">

    <?php 
  $ids=$_GET['id'];
$sql ="SELECT * FROM product,type WHERE product.type_id= type.type_id and product.pro_id='$ids' ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
    ?>

      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="image/<?=$row['image']?>" style="width: 600; height: 600;">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest"><?=$row['pro_id']?></h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?=$row['pro_name']?></h1>
        <div class="flex mb-4">
          <span class="flex items-center">ประเภทรูปภาพ : 
            <span class="text-gray-600 ml-3"><?=$row['type_name']?></span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">รายละเอียด
          </span>
        </div>
        <p class="leading-relaxed"> <?=$row['detail']?></p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
          <div class="flex ml-6 items-center">
            <div class="relative">
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
mysqli_close($conn);
?>
  </div>
  <div class="text-black text-center mb-10">
  <a href="store.php">กลับไปหน้าShow Product</a>
  </div>
</body>
</html>

