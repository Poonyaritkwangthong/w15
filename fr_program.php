<?php
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproduct</title>
     <!-- Bootstrap CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
             <div class="alert alert-primary h4 text-center md-4 mt-4" role="alert">
                  เพิ่มโปรเเกรม
             </div>
                <form name="form1" method="post" action="insert_program.php" enctype="multipart/form-data">
                   <label>ชื่อโปรเเกรม</label>
                   <input type="text" name="prgname"class="form-control" placeholder="ชื่อโปรเเกรม..." required > <br>
                   <label>ชื่อประเภทโปรเเกรม</label>
                   <select class="form-select" name="prgtypeid" aria-label="Default select example">
                     <?php
                     $sql="SELECT * FROM program_type ORDER BY prgtype_name";
                     $hand=mysqli_query($conn,$sql);
                     while($row=mysqli_fetch_array($hand)){
                        ?>
                       <option value="<?=$row['prgtype_id']?>"><?=$row['prgtype_name']?></option>
                    <?php
                        }
                        mysqli_close($conn);
                       ?>
                   </select> 

                   <label>รายละเอียด</label>
                   <input type="text" name="prgdetail"class="form-control" placeholder="รายละเอียด......" required > <br>
                   <label>อัพโหลดรูปภาพ</label><br>
                   <input type="file" name="file1"class="form-control" required > <br>
                   <label>เคล็ดลับ</label>
                   <input type="text" name="trick"class="form-control" placeholder="เคล็ดลับ......" required > <br>
                    <button type="submit" class="btn btn-primary">submit</button>
                    <input class="btn btn-danger" type="reset" value="Cancel">
                </form> 
                <a href="show_program.php" class="text-violet-400">ย้อนกลับ</a>  
            </div>
        </div>
    </div>

</body>
</html>