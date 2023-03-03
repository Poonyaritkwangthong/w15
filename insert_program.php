<?php
include 'condb.php' ;
$prg_name = $_POST['prgname'];
$prgtypeID = $_POST['prgtypeid'];
$prgdetail = $_POST['prgdetail'];
$prgtrick = $_POST['trick'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name ="";
    }

//คำสังเพิ่มข้อมูล
$sql="INSERT INTO program(prg_name,prgtype_id,prg_detail,prg_img,trick) 
VALUES('$prg_name','$prgtypeID','$prgdetail','$new_image_name','$prgtrick')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location='fr_program.php'; </script>";
}else{
    echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
}

?>