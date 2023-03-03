<?php
include 'condb.php' ;
$p_name = $_POST['pname'];
$typeID = $_POST['typeID'];
$detail = $_POST['pdetail'];

//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name ="";
    }

//คำสังเพิ่มข้อมูล
$sql="INSERT INTO product(pro_name,type_ID,detail,image) 
VALUES('$p_name','$typeID','$detail','$new_image_name')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location='fr_product.php'; </script>";
}else{
    echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
}

?>