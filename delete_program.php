<?php
include 'condb.php';
$idprg = $_GET['id'];
$sql="DELETE FROM program WHERE prg_id='$idprg' ";
if(mysqli_query($conn,$sql)){
    echo "<script> alert('ลบข้อมูลเรียบร้อยเเล้ว');</script>";
    echo "<script> window.location='show_program.php';</script>";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert(ไม่สามารถลบข้อมูลได้);<script>";
}
mysqli_close($conn);
?>