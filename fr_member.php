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
            หน้าเพิ่มข้อมูลผู้ใช้
        </div>
    <form method="POST" action="insert_member.php">
    <label>ชื่อ:</label>
    <input type="text" name="firstname" class="form-control" placeholder="ชื่อ..." required><br>
    <label>นามสกุล:</label>
    <input type="text" name="lastname" class="form-control" placeholder="นามสกุล..." required><br>
    <label>เบอร์โทรศัพท์:</label>
    <input type="number" name="phone" class="form-control" placeholder="เบอร์โทรศัพท์..." required><br>
    <label>Username:</label>
    <input type="text" name="username" class="form-control" placeholder="username..."  maxlength="10" required><br>
    <label>password:</label>
    <input type="password" name="password" class="form-control" placeholder="password..."  maxlength="10" required><br>
    <label>Status:0=user,1=admin</label>
    <input type="number" name="status" class="form-control" placeholder="status..."  maxlength="10" required><br>
    <input type="submit"class="btn btn-primary mb-2" value="submit">
    <input class="btn btn-danger mb-2" type="reset" value="Cancel">
    </form>
    <a href="show_member.php" class="text-violet-400">ย้อนกลับ</a>  
        </div>
    </div>
</div>
</body>
</html>