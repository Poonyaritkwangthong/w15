<?php
include 'condb.php';
$id=$_POST['id'];
$name=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['telephone'];
$username=$_POST['username'];
$status=$_POST['status'];

$sql = "UPDATE member set name='$name', lastname='$lastname', telephone='$phone', username='$username', status='$status' WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('เเก้ไขข้อมมูลเรียนร้อย'); </script> ";
    echo "<script> window.location='show_member.php'; </script> ";
}else{
    echo "<script> alert('เเก้ไขข้อมมูลไม่สำเร็จ'); </script> ";
}
mysqli_close($conn);

?>