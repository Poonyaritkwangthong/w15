<?php
include 'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
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
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
<div class="alert alert-primary h4 text-center mb-4 mt-4 ">
            เเก้ไขข้อมูลผู้ใช้
        </div>
    <form method="POST" action="update_member.php">
    <label>เเก้ไขรหัสผู้ใช้:</label>
    <input type="text" name="id" class="form-control" readonly value=<?=$row['id']?> ><br>
    <label>เเก้ไขชื่อ:</label>
    <input type="text" name="firstname" class="form-control" value=<?=$row['name']?>><br>
    <label>เเก้ไขนามสกุล:</label>
    <input type="text" name="lastname" class="form-control" value=<?=$row['lastname']?>><br>
    <label>เเก้ไขเบอร์โทรศัพท์:</label>
    <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>><br>
    <label>เเก้ไขUsername:</label>
    <input type="text" name="username" class="form-control" maxlength="10"value=<?=$row['username']?>><br>
    <label>เเก้ไขStatus:0=user,1=admin</label>
    <input type="number" name="status" class="form-control" maxlength="1"  value=<?=$row['status']?>><br>
    <input type="submit"class="btn btn-primary mb-2" value="updat">
    <input class="btn btn-danger mb-2" type="reset" value="Cancel">
    </form>
    <a href="show_member.php" class="text-violet-400">ย้อนกลับ</a>  
        </div>
    </div>
</div>
</body>
</html>