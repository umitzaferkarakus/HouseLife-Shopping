<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=eshopping;charset=utf8",'root','c9af51f23');

	//echo "Başarılı";
}

catch (PDOExcepton $e){

	echo $e->getMessage();
}


 ?> 