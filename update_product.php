<?php
include 'condb.php' ;
$proid = $_POST['id'];
$proname = $_POST['pname'];
$typeid = $_POST['typeID'];
$detail = $_POST['pdetail'];
$image = $_POST['txtimg'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "$image";
    }
//update
$sql="UPDATE product set 
pro_name ='$proname', 
type_ID='$typeid', 
detail='$detail', 
image='$new_image_name' 
WHERE pro_id='$proid' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('เเก้ไขข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location='show_product.php'; </script>";
}else{
    echo "<script> alert('ไม่เเก้ไขบันทึกข้อมูลได้'); </script>";
}

?>