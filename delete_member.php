<?php
include 'condb.php';
$id = $_GET['id'];
$sql="DELETE FROM member WHERE id='$id' ";
if(mysqli_query($conn,$sql)){
    echo "<script> alert('ลบข้อมูลเรียบร้อยเเล้ว');</script>";
    echo "<script> window.location='show_member.php';</script>";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert(ไม่สามารถลบข้อมูลได้);<script>";
}
mysqli_close($conn);
?>