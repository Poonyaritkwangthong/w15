<?php
include 'condb.php';
//รับค่าตัวเเปรมาจากไฟล์ register
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];
//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

//ค่าสั่งเพิ่มข้อมูลตาราง member
$sql ="INSERT INTO member(name,lastname,telephone,username,password,status)
Values('$name','$lastname','$phone','$username','$password','$status') ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมมูลเรียนร้อย'); </script> ";
    echo "<script> window.location='show_member.php'; </script> ";
}else{
    echo "<script> alert('บันทึกข้อมมูลไม่สำเร็จ'); </script> ";
}
mysqli_close($conn);



?>