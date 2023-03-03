<?php
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showproduct</title>
     <!-- Bootstrap CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-black">
<?php
  include 'admin_menu.php';
  ?>
    <div class="container">
    <div class="text-center text-white text-3xl mb-4 mt-4 ">
            หน้าเเสดงข้อมูล
        </div>
        <a class="btn btn-primary mb-4" href="fr_program.php" role="button">Add image</a>
        <table class="table table-dark table-striped">
            <tr> 
                <th class="text-white">รหัสโปรเเกรม</th>
                <th class="text-white">ชื่อโปรเเกรม</th>
                <th class="text-white">ประเภทโปรเเกรม</th>
                <th class="text-white">รายละเอียดโปรเเกรม</th>
                <th class="text-white">เคล็ดลับ</th>
                <th class="text-white">รูปภาพ</th>
                <th class="text-white">Edit</th>
                <th class="text-white">Delete</th>
            </tr>
            <?php
            $sql="SELECT * FROM program,program_type WHERE program.prgtype_id = program_type.prgtype_ID ";
            $hand = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($hand)){
            ?>
            <tr>
                <td class="text-white"><?=$row['prg_id']?></td>
                <td class="text-white"><?=$row['prg_name']?></td>
                <td class="text-white"><?=$row['prgtype_name']?></td>
                <td class="text-white"><?=$row['prg_detail']?></td>
                <td class="text-white"><?=$row['trick']?></td>
                <td><img src="image/<?=$row['prg_img']?>" width="100px" height="80px"></td>
                <td><a class="btn btn-warning" href="edit_program.php?id=<?=$row["prg_id"]?>">Edit</a></td>
                <td><a class="btn btn-danger" href="delete_program.php?id=<?=$row["prg_id"]?>" onclick="Del(this.href);return false;">Delete</a></td>
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