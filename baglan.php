<?php 

//Çoklu Dil Mantığı if/else

//$_SESSION['tr'];
//veya
////$_SESSION['eng'];

try {

	$db=new PDO("mysql:host=localhost;dbname=ferdikurban_kisisel;charset=utf8",'ferdikurban_kisisel','16.Ferdi');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>