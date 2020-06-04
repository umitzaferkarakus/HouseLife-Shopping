<?php 

ob_start();
session_start();

include 'connect.php';

if (!empty($_FILES)) {



	$uploads_dir = '../../dimg/product';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$uniquenumber1=rand(20000,32000);
	$uniquenumber2=rand(20000,32000);
	$uniquenumber3=rand(20000,32000);
	$uniquenumber4=rand(20000,32000);

	$uniquename=$uniquenumber1.$uniquenumber2.$uniquenumber3.$uniquenumber4;
	$imgway=substr($uploads_dir, 6)."/".$uniquename.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$uniquename$name");

	$product_id=$_POST['product_id'];

	$save=$db->prepare("INSERT INTO productfoto SET
		profoto_picway=:picway,
		product_id=:product_id");
	$insert=$save->execute(array(
		'picway' => $imgway,
		'product_id' => $product_id
		));




}





?>