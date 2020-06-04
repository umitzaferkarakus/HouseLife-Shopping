<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=eshopping;charset=utf8",'root','');

	//echo "Başarılı";
}

catch (PDOExcepton $e){

	echo $e->getMessage();
}


 ?> 
