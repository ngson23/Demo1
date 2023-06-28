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
$sql="SELECT id,firstname,lastname,email from MG1";
//thuc hien insert
$result=$con->query($sql);
if($result->num_rows>0)//neu co du lieu
{
     while($row=$result->fetch_assoc()){//doc tung dong du lieu
          echo "id: ".$row["id"]."- First: ".$row["firstname"]
          ."- Last: ".$row["lastname"]."Email: ".$row["email"]."</br>";
     }
}
else{
     echo "Khong co du lieu ";
}
?>