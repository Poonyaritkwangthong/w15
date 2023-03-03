<?php
include 'condb.php';
$idpro = $_GET['id'];
$sql ="SELECT * FROM product WHERE pro_id='$idpro' ";
$result= mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($result);
$p_typeID=$rs['type_ID'];
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
                  เเก้ไขรูปภาพ
             </div>
                <form name="form1" method="post" action="update_product.php" enctype="multipart/form-data">
                   <label>รหัสรูป</label>
                   <input type="text" name="id"class="form-control" readonly value=<?=$rs['pro_id']?>> <br>
                   <label>ชื่อรูป</label>
                   <input type="text" name="pname"class="form-control" value=<?=$rs['pro_name']?>> <br>
                   <label>ชื่อประเภทรูปภาพ</label>
                   <select class="form-select" name="typeID" aria-label="Default select example">
                     <?php
                     $sql="SELECT * FROM type ORDER BY type_name";
                     $hand=mysqli_query($conn,$sql);
                     while($row=mysqli_fetch_array($hand)){
                      $ttypeID = $row['type_ID'];
                        ?>
                       <option value="<?=$row['type_ID']?>" <?php if($p_typeID==$ttypeID){echo "selected=selected";} ?> >
                       <?=$row['type_name']?></option>
                    <?php
                        }
                        mysqli_close($conn);
                       ?>
                   </select> <br>
                   <label>รูปภาพ</label><br>
                   <img src="image/<?=$rs['image']?>" width="100px" height="80px" class="mt-4"> <br>
                   <label class="mt-4">รายละเอียด</label>
                   <input type="text" name="pdetail"class="form-control" value=<?=$rs['detail']?>> <br>
                   <label>อัพโหลดรูปภาพ</label>
                   
                   <input type="file" name="file1"class="form-control"> <br>
                   <input type="hidden" name="txtimg"class="form-control" value=<?=$rs['image']?>> <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <input class="btn btn-danger" type="reset" value="Cancel">
                </form> 
                <a href="show_product.php" class="text-violet-400">ย้อนกลับ</a>  
            </div>
        </div>
    </div>

</body>
</html>