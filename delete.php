<?php
//Khai bao cac bien
$s="localhost"; $u="id20966561_b11";
$p="Mk@123web"; $db="id20966561_b11";
//tao ket noi voi CSDL
$con=new mysqli($server,$u,$p,$db);
//kiem tra ket noi, neu co loi thi thong bao
if($con->connect_err){
     die("Loi ket noi: ".$con->connect_err);
}
//chuoi insert
$sql="DELETE from MG1 WHERE id=163";
//thuc hien insert
if($con->query($sql)===TRUE){
     echo "Delet thanh cong";
}
else{
     echo "Loi: ".$con->error;
}
?>