<?php
/**
Secara umum tipe data variabel yang terdapat dalam bahasa pemrograman PHP adalah sebagai berikut:
1. String
2. Integer
3. Double
4. Boolean
5. Array
6. Object
*/

#String
$nama = "Salman";
echo"Nama saya ".$nama."<br>";

#Integer
$a = 1;
$b = 19;
$umur = $a+$b;
echo"Umur saya ".$umur."<br>";

#Double
$p = 178;
$q = 0.5;
$tinggi = $p + $q; 
echo"Tinggi saya ".$tinggi."<br>";

#Boolean
$status = true;
if($status){
	echo"Selamat datang ".$nama."<br><br>";
}

#Array
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