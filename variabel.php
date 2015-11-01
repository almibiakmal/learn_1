<?php

#String
$nama = "Almibi Akmal";
echo"Ini tipe data STRING<br>";
echo"Nama saya ".$nama."<br>";


#Integer
$a = 1;
$b = 19;
$umur = $a+$b;
echo"<br>Ini tipe data INTEGER<br>";
echo"Umur saya ".$umur."<br>";


#Double
$p = 178;
$q = 0.5;
$tinggi = $p + $q;
echo"<br>Ini tipe data DOUBLE<br>";
echo"Tinggi saya ".$tinggi."<br>";


#Boolean
$status = true;
if($status){
	echo"<br>Ini tipe data BOOLEAN<br>";
	echo"Selamat datang ".$nama."<br><br>";
}


#Array
	echo"Ini tipe data ARRAY<br>";

	//versi 1
	$array1 = ["andi","budi","cindi","dede"];
	echo"===============Array versi 1===============";
	for($i=0; $i < count($array1); $i++){
		echo"<br>Isi array ".$i." : ".$array1[$i];
	}
	echo"<br>========================================";

	
	//versi 2
	echo"<br>===============Array versi 2===============";
	$array2 = array(
			array("andi",70,"A1"),
			array("budi",80,"A2"),
			array("cindi",90,"A3"),
			array("dede",100,"A4")
		   );
	for($x=0; $x < count($array2); $x++){
		echo"<br>*Array ke-".$x."<br>";
		for($y=0; $y <= 2; $y++){
			echo"Arrray ke-".$x.",".$y." : ".$array2[$x][$y]."<br>";
		}
	}
	echo"<br>========================================";

?>