<?php
include 'condb.php' ;
$prgid = $_POST['id'];
$prg_name = $_POST['prgname'];
$prgtypeID = $_POST['prgtypeid'];
$prgdetail = $_POST['prgdetail'];
$image = $_POST['prgimg'];
$prgtrick = $_POST['trick'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "$image";
    }
//update
$sql="UPDATE program set 
prg_name ='$prg_name', 
prgtype_id='$prgtypeID', 
prg_detail='$prgdetail', 
prg_img='$new_image_name',
trick='$prgtrick' 
WHERE prg_id='$prgid' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('เเก้ไขข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location='show_program.php'; </script>";
}else{
    echo "<script> alert('ไม่เเก้ไขบันทึกข้อมูลได้'); </script>";
}

?>