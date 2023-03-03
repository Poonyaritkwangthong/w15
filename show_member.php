<?php
include 'condb.php';
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
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
    <?php
    include 'admin_menu.php';
    ?>
<div class="container">
<div class="text-center text-white text-3xl mb-4 mt-4 ">
            หน้าเเสดงข้อมูลผู้ใช้
        </div>
        <a class="btn btn-primary mb-4" href="fr_member.php" role="button">Add user</a>
<table class="table table-dark table-striped">
   <tr>
    <th class="text-white">รหัสผู้ใช้</th>
    <th class="text-white">ชื่อ</th>
    <th class="text-white">นามสกุล</th>
    <th class="text-white">เบอร์โทรศัพท์</th>
    <th class="text-white">Username</th>
    <th class="text-white">Status <br> 0=user,1=admin</th>
    <th class="text-white">Edit</th>
    <th class="text-white">Delete</th>
   </tr>
   <?php 
   $sql="SELECT * FROM member";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($result)){
   ?>
   <tr>
    <td class="text-white"><?=$row["id"]?></td>
    <td class="text-white"><?=$row["name"]?></td>
    <td class="text-white"><?=$row["lastname"]?></td>
    <td class="text-white"><?=$row["telephone"]?></td>
    <td class="text-white"><?=$row["username"]?></td>
    <td class="text-white"><?=$row["status"]?></td>
    <td><a class="btn btn-warning" href="edit_member.php?id=<?=$row["id"]?>">Edit</a></td>
    <td><a class="btn btn-danger" href="delete_member.php?id=<?=$row["id"]?>" onclick="Del(this.href);return false;">Delete</a></td>
   </tr>
   <?php
   }
   mysqli_close($conn);
   ?>
</table> 
<a href="show_member.php" class="btn btn-primary">Showmember</a><br>
<a href="show_product.php" class="btn btn-warning">Showproduct</a><br>
<a href="show_program.php" class="btn btn-danger">Showprogram</a>
</div>
</body>
</html>

<script language="JavaScript">
function Del(mypage){
  var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
  if(agree){
    window.location=mypage;
  }
}
</script>