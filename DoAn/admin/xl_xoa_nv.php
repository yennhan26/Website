<?php 
include ('subpage/connect.php');
$manv = $_GET['manv']; 
if($_SESSION['manv']!=$manv){
   
    $sql = "DELETE FROM admin where manv = '". $manv."'";
}elseif($_SESSION['manv']=$manv){
   echo 'khong thẻ xoa';
}
echo($sql);
$T = $obj->query($sql);
header("location:nhanvien.php")
?>
