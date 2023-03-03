<?php
include 'condb.php';
$idpro = $_GET['id'];
$sql ="SELECT * FROM program WHERE prg_id='$idpro' ";
$result= mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($result);
$p_typeID=$rs['prg_id'];
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
                  เเก้ไขรหัสโปรเเกรม
             </div>
                <form name="form1" method="post" action="update_program.php" enctype="multipart/form-data">
                   <label>เเก้ไขรหัสโปรเเกรม</label>
                   <input type="text" name="id"class="form-control" readonly value=<?=$rs['prg_id']?>> <br>
                   <label>เเก้ไขชื่อรหัสโปรเเกรม</label>
                   <input type="text" name="prgname"class="form-control" value=<?=$rs['prg_name']?>> <br>
                   <label>เเก้ชื่อประเภทโปรเเกรม</label>
                   <select class="form-select" name="prgtypeid" aria-label="Default select example">
                     <?php
                     $sql="SELECT * FROM program_type ORDER BY prgtype_name";
                     $hand=mysqli_query($conn,$sql);
                     while($row=mysqli_fetch_array($hand)){
                      $ttypeID = $row['prgtype_id'];
                        ?>
                       <option value="<?=$row['prgtype_id']?>" <?php if($p_typeID==$ttypeID){echo "selected=selected";} ?> >
                       <?=$row['prgtype_name']?></option>
                    <?php
                        }
                        mysqli_close($conn);
                       ?>
                   </select> <br>
                   <label>รูปภาพ</label><br>
                   <img src="image/<?=$rs['prg_img']?>" width="100px" height="80px" class="mt-4"> <br>
                   <label class="mt-4">เเก้ไขรายละเอียด</label>
                   <input type="text" name="prgdetail"class="form-control" value=<?=$rs['prg_detail']?>> <br>
                   <label>อัพโหลดรูปภาพ</label>
                   
                   <input type="file" name="file1"class="form-control"> <br>
                   <input type="hidden" name="prgimg"class="form-control" value=<?=$rs['prg_img']?>> <br>
                   <label class="mt-4">เเก้ไขเคล็ดลับ</label>
                   <input type="text" name="trick"class="form-control" value=<?=$rs['trick']?>> <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <input class="btn btn-danger" type="reset" value="Cancel">
                </form> 
                <a href="show_product.php" class="text-violet-400">ย้อนกลับ</a>  
            </div>
        </div>
    </div>

</body>
</html>