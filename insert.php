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
$sql="insert into MG1 (id,firstname,lastname,email) 
values ('01','Hung','Nguyen','h@gmail.com')";
//thuc hien insert
if($con->query($sql)===TRUE){
     echo "Insert thanh cong";
}
else{
     echo "Loi: ".$con->error;
}
?>