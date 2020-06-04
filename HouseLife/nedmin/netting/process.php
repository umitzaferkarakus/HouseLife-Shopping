<?php 
ob_start();
session_start();
include 'connect.php';
include '../production/function.php';

if(isset($_POST['adminlogin'])){

	$user_mail=$_POST['user_mail'];
	$user_password=($_POST['user_password']);

	$askuser=$db->prepare("SELECT * FROM user where user_mail=:mail and user_password=:password and user_title=:title");
	$askuser->execute(array(
		'mail'=>$user_mail, 
		'password'=>$user_password,
		'title'=>5
	));

	$count=$askuser->rowCount();

	if($count==1){

		$_SESSION['user_mail']=$user_mail;
		header("Location:../production/index.php");
		exit;


	}
	else{
		header("Location:../production/login.php?status=no");
		exit;
	}
}




if(isset($_POST['generalsettingsave'])){

	$savesetting=$db->prepare("UPDATE setting  SET

		setting_title=:setting_title,
		setting_description=:setting_description,
		setting_keywords=:setting_keywords,
		setting_author=:setting_author
		WHERE setting_id=0");

	$update=$savesetting->execute(array(

		'setting_title' => $_POST['setting_title'],
		'setting_description' => $_POST['setting_description'],
		'setting_keywords' => $_POST['setting_keywords'],
		'setting_author' => $_POST['setting_author'],

	));


	if($update) {

		header("Location:../production/general-setting.php?status=ok");
	}

	else {
		header("Location:../production/general-setting.php?status=no");
	}
}



if(isset($_POST['contactsettingsave'])){

	$savesetting=$db->prepare("UPDATE setting  SET

		setting_phone=:setting_phone,
		setting_gsm=:setting_gsm,
		setting_mail=:setting_mail,
		setting_country=:setting_country,
		setting_city=:setting_city,
		setting_adress=:setting_adress,
		setting_facebook=:setting_facebook,
		setting_twitter=:setting_twitter,
		setting_google=:setting_google,
		setting_youtube=:setting_youtube
		WHERE setting_id=0");

	$update=$savesetting->execute(array(

		'setting_phone' => $_POST['setting_phone'],
		'setting_gsm' => $_POST['setting_gsm'],
		'setting_mail' => $_POST['setting_mail'],
		'setting_country' => $_POST['setting_country'],
		'setting_city' => $_POST['setting_city'],
		'setting_adress' => $_POST['setting_adress'],
		'setting_facebook' => $_POST['setting_facebook'],
		'setting_twitter' => $_POST['setting_twitter'],
		'setting_google' => $_POST['setting_google'],
		'setting_youtube' => $_POST['setting_youtube'],

	));


	if($update) {

		header("Location:../production/contact-setting.php?status=ok");
	}

	else {
		header("Location:../production/contact-setting.php?status=no");
	}
}


if(isset($_POST['apisettingsave'])){

	$savesetting=$db->prepare("UPDATE setting  SET

		setting_analystic=:setting_analystic,
		setting_maps=:setting_maps,
		setting_zopim=:setting_zopim	
		WHERE setting_id=0");

	$update=$savesetting->execute(array(

		'setting_analystic' => $_POST['setting_analystic'],
		'setting_maps' => $_POST['setting_maps'],
		'setting_zopim' => $_POST['setting_zopim'],
	));


	if($update) {

		header("Location:../production/api-setting.php?status=ok");
	}

	else {
		header("Location:../production/api-setting.php?status=no");
	}
}


if(isset($_POST['mailsettingsave'])){

	$savesetting=$db->prepare("UPDATE setting  SET

		setting_smtphost=:setting_smtphost,
		setting_smtpuser=:setting_smtpuser,
		setting_smtpassword=:setting_smtpassword,
		setting_smtppost=:setting_smtppost,
		setting_overhaul=:setting_overhaul
		WHERE setting_id=0");

	$update=$savesetting->execute(array(

		'setting_smtphost' => $_POST['setting_smtphost'],
		'setting_smtpuser' => $_POST['setting_smtpuser'],
		'setting_smtpassword' => $_POST['setting_smtpassword'],
		'setting_smtppost' => $_POST['setting_smtppost'],
		'setting_overhaul' => $_POST['setting_overhaul'],
	));


	if($update) {

		header("Location:../production/mail-setting.php?status=ok");
	}

	else {
		header("Location:../production/mail-setting.php?status=no");
	}
}

if(isset($_POST['aboutsettingsave'])){

	$savesetting=$db->prepare("UPDATE about  SET

		about_title=:about_title,
		about_content=:about_content,
		about_video=:about_video,
		about_vision=:about_vision,
		about_mission=:about_mission
		WHERE about_id=0");

	$update=$savesetting->execute(array(

		'about_title' => $_POST['about_title'],
		'about_content' => $_POST['about_content'],
		'about_video' => $_POST['about_video'],
		'about_vision' => $_POST['about_vision'],
		'about_mission' => $_POST['about_mission'],
	));


	if($update) {

		header("Location:../production/about.php?status=ok");
	}

	else {
		header("Location:../production/about.php?status=no");
	}
}


if(isset($_POST['usereditsave'])){

	$user_id=$_POST['user_id'];

	$savesetting=$db->prepare("UPDATE user  SET

		user_tc=:user_tc,
		user_name=:user_name,
		user_status=:user_status
		WHERE user_id={$_POST['user_id']}");

	$update=$savesetting->execute(array(

		'user_tc' => $_POST['user_tc'],
		'user_name' => $_POST['user_name'],
		'user_status' => $_POST['user_status']
	));
	
	if($update) {

		header("Location:../production/user-edit.php?user_id=$user_id&status=ok");
	}

	else {
		header("Location:../production/user-edit.php?user_id=$user_id&status=no");
	}
}


if(isset($_POST['editmenu'])){

	$menu_id=$_POST['menu_id'];

	$menu_seourl=seo($_POST['menu_name']);

	
	$savesetting=$db->prepare("UPDATE menu  SET
		menu_name=:menu_name,
		menu_detail=:menu_detail,
		menu_url=:menu_url,
		menu_row=:menu_row,
		menu_seourl=:menu_seourl,
		menu_status=:menu_status
		WHERE menu_id={$_POST['menu_id']}");

	$update=$savesetting->execute(array(

		'menu_name' => $_POST['menu_name'],
		'menu_detail' => $_POST['menu_detail'],
		'menu_url' => $_POST['menu_url'],
		'menu_row' => $_POST['menu_row'],
		'menu_seourl' => $menu_seourl,
		'menu_status' => $_POST['menu_status']
		
		

	));
	
	if($update) {

		header("Location:../production/menu-edit.php?menu_id=$menu_id&status=ok");
	}

	else {
		header("Location:../production/menu-edit.php?menu_id=$menu_id&status=no");
	}
}

if ($_GET['menudelete']=="ok") {

	$delete=$db->prepare("DELETE from menu where menu_id=:id");
	$control=$delete->execute(array(
		'id' => $_GET['menu_id']
	));


	if ($control) {


		header("location:../production/menu.php?sil=ok");


	} else {

		header("location:../production/menu.php?sil=no");

	}


}

if ($_GET['userdelete']=="ok") {

	$delete=$db->prepare("DELETE from user where user_id=:id");
	$control=$delete->execute(array(
		'id' => $_GET['user_id']
	));


	if ($kontrol) {


		header("location:../production/users.php?sil=ok");


	} else {

		header("location:../production/users.php?sil=no");

	}


}

if(isset($_POST['addmenu'])){

	
	$menu_seourl=seo($_POST['menu_name']);

	$addsetting=$db->prepare("INSERT INTO menu  SET
		menu_name=:menu_name,
		menu_detail=:menu_detail,
		menu_url=:menu_url,
		menu_row=:menu_row,
		menu_seourl=:menu_seourl,
		menu_status=:menu_status
		");

	$insert=$addsetting->execute(array(

		'menu_name' => $_POST['menu_name'],
		'menu_detail' => $_POST['menu_detail'],
		'menu_url' => $_POST['menu_url'],
		'menu_row' => $_POST['menu_row'],
		'menu_seourl' => $menu_seourl,
		'menu_status' => $_POST['menu_status'],
		
		

	));
	if($insert) {

		header("Location:../production/menu.php?status=ok");
	}

	else {
		header("Location:../production/menu.php?status=no");
	}
}


if (isset($_POST['editlogo'])) {

	

	$uploads_dir = '../../dimg';

	@$tmp_name = $_FILES['setting_logo']["tmp_name"];
	@$name = $_FILES['setting_logo']["name"];

	$uniquenumber1=rand(20000,32000);
	$refimgway=substr($uploads_dir, 6)."/".$uniquenumber1.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$uniquenumber1$name");

	
	$edit=$db->prepare("UPDATE setting SET
		setting_logo=:logo
		WHERE setting_id=0");
	$update=$edit->execute(array(
		'logo' => $refimgway
	));



	if ($update) {

		$deletepiclink=$_POST['old_way'];
		unlink("../../$deletepiclink");

		Header("Location:../production/general-setting.php?status=ok");

	} else {

		Header("Location:../production/general-setting.php?status=no");
	}

}


if (isset($_POST['addslider'])) {


	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_pic']["tmp_name"];
	@$name = $_FILES['slider_pic']["name"];
	
	$uniquenumber1=rand(20000,32000);
	$uniquenumber2=rand(20000,32000);
	$uniquenumber3=rand(20000,32000);
	$uniquenumber4=rand(20000,32000);	
	$uniquename=$uniquenumber1.$uniquenumber2.$uniquenumber3.$uniquenumber4;
	$refimgway=substr($uploads_dir, 6)."/".$uniquename.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$uniquename$name");
	


	$save=$db->prepare("INSERT INTO slider SET
		slider_name=:slider_name,
		slider_row=:slider_row,
		slider_link=:slider_link,
		slider_pic=:slider_pic
		");
	$insert=$save->execute(array(
		'slider_name' => $_POST['slider_name'],
		'slider_row' => $_POST['slider_row'],
		'slider_link' => $_POST['slider_link'],
		'slider_pic' => $refimgway
	));

	if ($insert) {

		Header("Location:../production/slider.php?status=ok");

	} else {

		Header("Location:../production/slider.php?status=no");
	}




}


if (isset($_POST['saveuser'])) {

	
	echo $user_name=htmlspecialchars($_POST['user_name']); echo "<br>";
	echo $user_mail=htmlspecialchars($_POST['user_mail']); echo "<br>";

	echo $user_passwordone=$_POST['user_passwordone']; echo "<br>";
	echo $user_passwordtwo=$_POST['user_passwordtwo']; echo "<br>";


	if ($user_passwordone==$user_passwordtwo) {


		if (strlen($user_passwordone)>=6) {


// Başlangıç

			$askuser=$db->prepare("select * from user where user_mail=:mail");
			$askuser->execute(array(
				'mail' => $user_mail
			));

			//dönen satır sayısını belirtir
			$count=$askuser->rowCount();



			if ($count==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($user_passwordone);

				$user_title=1;

			//Kullanıcı kayıt işlemi yapılıyor...
				$saveuser=$db->prepare("INSERT INTO user SET
					user_name=:user_name,
					user_mail=:user_mail,
					user_password=:user_password,
					user_title=:user_title
					");
				$insert=$saveuser->execute(array(
					'user_name' => $user_name,
					'user_mail' => $user_mail,
					'user_password' => $password,
					'user_title' => $user_title
				));

				if ($insert) {


					header("Location:../../index.php?status=succesfull");


				//Header("Location:../production/genel-ayarlar.php?status=ok");

				} else {


					header("Location:../../register.php?status=failed");
				}

			} else {

				header("Location:../../register.php?status=usedname");



			}




		// Bitiş



		} else {


			header("Location:../../register.php?status=incompletepass");


		}



	} else {



		header("Location:../../register.php?status=diffpassword");
	}
	


}


if (isset($_POST['userlogin'])) {


	
	echo $user_mail=htmlspecialchars($_POST['user_mail']); 
	echo $user_password=md5($_POST['user_password']); 
	



	$askuser=$db->prepare("select * from user where user_mail=:mail and user_title=:title and user_password=:password and user_status=:status");
	$askuser->execute(array(
		'mail' => $user_mail,
		'title' => 1, 
		'password' => $user_password,
		'status' => 1
	));


	$count=$askuser->rowCount();



	if ($count==1) {

		echo $_SESSION['useruser_mail']=$user_mail;

		header("Location:../../");
		exit;
		




	} else {


		header("Location:../../?status=failedlogin");

	}


}

if (isset($_POST['editslider'])) {

	
	if($_FILES['slider_pic']["size"] > 0)  { 


		$uploads_dir = '../../dimg/slider';
		@$tmp_name = $_FILES['slider_pic']["tmp_name"];
		@$name = $_FILES['slider_pic']["name"];
		$uniquenumber1=rand(20000,32000);
		$uniquenumber2=rand(20000,32000);
		$uniquenumber3=rand(20000,32000);
		$uniquenumber4=rand(20000,32000);
		$uniquename=$uniquenumber1.$uniquenumber2.$uniquenumber3.$uniquenumber4;
		$refimgway=substr($uploads_dir, 6)."/".$uniquename.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$uniquename$name");

		$edit=$db->prepare("UPDATE slider SET
			slider_name=:name,
			slider_link=:link,
			slider_row=:row,
			slider_status=:status,
			slider_pic=:picway	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$edit->execute(array(
			'name' => $_POST['slider_name'],
			'link' => $_POST['slider_link'],
			'row' => $_POST['slider_row'],
			'status' => $_POST['slider_status'],
			'picway' => $refimgway,
		));
		

		$slider_id=$_POST['slider_id'];

		if ($update) {

			$deletepiclink=$_POST['slider_pic'];
			unlink("../../$deletepiclink");

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&status=ok");

		} else {

			Header("Location:../production/slider-edit.php?status=no");
		}
	}

}


if ($_GET['sliderdelete']=="ok") {
	
	$delete=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$control=$delete->execute(array(
		'slider_id' => $_GET['slider_id']
		));

	if ($control) {

		$resimsilunlink=$_GET['slider_pic'];
		unlink("../../$sliderdeletelink");

		Header("Location:../production/slider.php?status=ok");

	} else {

		Header("Location:../production/slider.php?status=no");
	}

}


if (isset($_POST['editcategory'])) {

	$category_id=$_POST['category_id'];
	$category_seourl=seo($_POST['category_name']);

	
	$save=$db->prepare("UPDATE category SET
		category_name=:name,
		category_status=:category_status,	
		category_seourl=:seourl,
		category_row=:row
		WHERE category_id={$_POST['category_id']}");
	$update=$save->execute(array(
		'name' => $_POST['category_name'],
		'category_status' => $_POST['category_status'],
		'seourl' => $category_seourl,
		'row' => $_POST['category_row']		
		));

	if ($update) {

		Header("Location:../production/category-edit.php?status=ok&category_id=$category_id");

	} else {

		Header("Location:../production/category-edit.php?status=no&category_id=$category_id");
	}

}


if (isset($_POST['addcategory'])) {

	$category_seourl=seo($_POST['category_name']);

	$save=$db->prepare("INSERT INTO category SET
		category_name=:name,
		category_status=:category_status,	
		category_seourl=:seourl,
		category_row=:row
		");
	$insert=$save->execute(array(
		'name' => $_POST['category_name'],
		'category_status' => $_POST['category_status'],
		'seourl' => $category_seourl,
		'row' => $_POST['category_row']		
		));

	if ($insert) {

		Header("Location:../production/category.php?status=ok");

	} else {

		Header("Location:../production/category.php?status=no");
	}

}

if ($_GET['categorydelete']=="ok") {
	
	$sil=$db->prepare("DELETE from category where category_id=:category_id");
	$kontrol=$sil->execute(array(
		'category_id' => $_GET['category_id']
		));

	if ($kontrol) {

		Header("Location:../production/category.php?status=ok");

	} else {

		Header("Location:../production/category.php?status=no");
	}

}

if ($_GET['productdelete']=="ok") {
	
	$sil=$db->prepare("DELETE from product where product_id=:product_id");
	$kontrol=$sil->execute(array(
		'product_id' => $_GET['product_id']
		));

	if ($kontrol) {

		Header("Location:../production/product.php?status=ok");

	} else {

		Header("Location:../production/product.php?status=no");
	}

}


if (isset($_POST['editproduct'])) {

	$product_id=$_POST['product_id'];
	$product_seourl=seo($_POST['product_name']);

	$kaydet=$db->prepare("UPDATE product SET
		category_id=:category_id,
		product_name=:product_name,
		product_detail=:product_detail,
		product_price=:product_price,
		product_keyword=:product_keyword,
		product_status=:product_status,
		product_stock=:product_stock,	
		product_seourl=:seourl		
		WHERE product_id={$_POST['product_id']}");
	$update=$kaydet->execute(array(
		'category_id' => $_POST['category_id'],
		'product_name' => $_POST['product_name'],
		'product_detail' => $_POST['product_detail'],
		'product_price' => $_POST['product_price'],
		'product_keyword' => $_POST['product_keyword'],
		'product_status' => $_POST['product_status'],
		'product_stock' => $_POST['product_stock'],
		'seourl' => $product_seourl

		));

	if ($update) {

		Header("Location:../production/product-edit.php?status=ok&product_id=$product_id");

	} else {

		Header("Location:../production/product-edit.php?status=no&product_id=$product_id");
	}

}

if (isset($_POST['addproduct'])) {

	$product_seourl=seo($_POST['product_name']);

	$save=$db->prepare("INSERT INTO product SET
		category_id=:category_id,
		product_name=:product_name,
		product_detail=:product_detail,
		product_price=:product_price,
		product_keyword=:product_keyword,
		product_status=:product_status,
		product_stock=:product_stock,	
		product_seourl=:seourl		
		");
	$insert=$save->execute(array(
		'category_id' => $_POST['category_id'],
		'product_name' => $_POST['product_name'],
		'product_detail' => $_POST['product_detail'],
		'product_price' => $_POST['product_price'],
		'product_keyword' => $_POST['product_keyword'],
		'product_status' => $_POST['product_status'],
		'product_stock' => $_POST['product_stock'],
		'seourl' => $product_seourl

		));

	if ($insert) {

		Header("Location:../production/product.php?status=ok");

	} else {

		Header("Location:../production/product.php?status=no");
	}

}


if(isset($_POST['addreviews'])){

	
	$site_url=$_POST['site_url'];

	$addsetting=$db->prepare("INSERT INTO reviews  SET
		reviews_detail=:reviews_detail,
		product_id=:product_id,
		user_id=:user_id
		");

	$insert=$addsetting->execute(array(

		'reviews_detail' => $_POST['reviews_detail'],
		'product_id' => $_POST['product_id'],
		'user_id' => $_POST['user_id']
		
		
		

	));
	if($insert) {

		header("Location:$site_url?status=ok");
	}

	else {
		header("Location:$site_url?status=no");
	}
}



if (isset($_POST['addcart'])) {


	$addsetting=$db->prepare("INSERT INTO cart SET
		product_quantity=:product_quantity,
		user_id=:user_id,
		product_id=:product_id	
		
		");

	$insert=$addsetting->execute(array(
		'product_quantity' => $_POST['product_quantity'],
		'user_id' => $_POST['user_id'],
		'product_id' => $_POST['product_id']
		
		));


	if ($insert) {

		Header("Location:../../cart?status=ok");

	} else {

		Header("Location:../../cart?status=no");
	}

}


if (isset($_POST['addbank'])) {

	$save=$db->prepare("INSERT INTO bank SET
		bank_name=:name,
		bank_status=:bank_status,	
		bank_account=:bank_account,
		bank_iban=:bank_iban
		");
	$insert=$save->execute(array(
		'name' => $_POST['bank_name'],
		'bank_status' => $_POST['bank_status'],
		'bank_account' => $_POST['bank_account'],
		'bank_iban' => $_POST['bank_iban']		
		));

	if ($insert) {

		Header("Location:../production/bank.php?status=ok");

	} else {

		Header("Location:../production/bank.php?status=no");
	}

}

if (isset($_POST['editbank'])) {

	$bank_id=$_POST['bank_id'];

	$save=$db->prepare("UPDATE bank SET

		bank_name=:name,
		bank_status=:bank_status,	
		bank_account=:bank_account,
		bank_iban=:bank_iban
		WHERE bank_id={$_POST['bank_id']}");
	$update=$save->execute(array(
		'name' => $_POST['bank_name'],
		'bank_status' => $_POST['bank_status'],
		'bank_account' => $_POST['bank_account'],
		'bank_iban' => $_POST['bank_iban']		
		));

	if ($update) {

		Header("Location:../production/edit-bank.php?bank_id=$bank_id&status=ok");

	} else {

		Header("Location:../production/edit-bank.php?bank_id=$bank_id&status=no");
	}
}


if ($_GET['deletebank']=="ok") {
	
	$delete=$db->prepare("DELETE from bank where bank_id=:bank_id");
	$control=$delete->execute(array(
		'bank_id' => $_GET['bank_id']
		));

	if ($control) {

		
		Header("Location:../production/bank.php?status=ok");

	} else {

		Header("Location:../production/bank.php?status=no");
	}

}



if (isset($_POST['savecart'])) {

	$order_type="Bank Transfer";



	$save=$db->prepare("INSERT INTO taken SET
		user_id=:user_id,
		order_type=:order_type,	
		order_bank=:order_bank,
		order_total=:order_total
		");
	$insert=$save->execute(array(
		'user_id' => $_POST['user_id'],
		'order_type' => $order_type,
		'order_bank' => $_POST['order_bank'],
		'order_total' => $_POST['order_total']		
		));

	if ($insert) {

		

		echo $order_id = $db->lastInsertId();

		echo "<hr>";


		$user_id=$_POST['user_id'];
		$askcart=$db->prepare("SELECT * FROM cart where user_id=:id");
		$askcart->execute(array(
			'id' => $user_id
			));

		while($checkcart=$askcart->fetch(PDO::FETCH_ASSOC)) {

			$product_id=$checkcart['product_id']; 
			$product_quantity=$checkcart['product_quantity'];

			$askproduct=$db->prepare("SELECT * FROM product where product_id=:id");
			$askproduct->execute(array(
				'id' => $product_id
				));

			$checkproduct=$askproduct->fetch(PDO::FETCH_ASSOC);
			
			echo $product_price=$checkproduct['product_price'];


			
			$save=$db->prepare("INSERT INTO taken_detail SET
				
				order_id=:order_id,
				product_id=:product_id,	
				product_price=:product_price,
				product_quantity=:product_quantity
				");
			$insert=$save->execute(array(
				'order_id' => $order_id,
				'product_id' => $product_id,
				'product_price' => $product_price,
				'product_quantity' => $product_quantity

				));


		}

		if ($insert) {

			

			

			$delete=$db->prepare("DELETE from cart where user_id=:user_id");
			$control=$delete->execute(array(
				'user_id' => $user_id
				));

			
			Header("Location:../../myshopping.php?status=ok");
			exit;


		}

		




	} else {

		
		
		Header("Location:../production/myshopping.php?status=no");
	}



}

if(isset($_POST['deletephoto'])) {

	$product_id=$_POST['product_id'];


	echo $checklist = $_POST['chooseprofoto'];

	
	foreach($checklist as $list) {

		$delete=$db->prepare("DELETE from productfoto where profoto_id=:profoto_id");
		$control=$delete->execute(array(
			'profoto_id' => $list
			));
	}

	if ($control) {

		Header("Location:../production/product-galeri.php?product_id=$product_id&status=ok");

	} else {

		Header("Location:../production/product-galeri.php?product_id=$product_id&status=no");
	}


} 




























?>