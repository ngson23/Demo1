<?php
header('Access-Control-Allow-Origin: *');
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
$sql="SELECT * from MG1";
//thuc hien insert
$result=$con->query($sql);
     while($row[]=$result->fetch_assoc()){//doc tung dong du lieu
         $json=json_encode($row);//chuyen sang json
     }
     echo '{"MG1":'.$json.'}';
$con->close();
?>