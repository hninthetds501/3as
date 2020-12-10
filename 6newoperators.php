<?php 
	$a=20;
	$b=10;
	$c=10;
	$bol1=true;
	$bol2=false;


    var_dump($a<=>$b); //1
	var_dump($b<=>$a); //-1
	var_dump($c<=>$b); //0

	var_dump($bol1 and $bol2); //false
	var_dump($bol1 or $bol2); //true
	var_dump(!$bol1); //false
	var_dump(!$bol2); //true

    //$arr=[red,green,blue]=>key->index
	$color1=array("r"=>"red","y"=>"yellow","b"=>"blue");
	$color2=array("c"=>"cyan","p"=>"purple");
	print_r($color1+$color2);
	var_dump($color1==$color2); //f
	var_dump($color1!=$color2); //t
	var_dump($color1<>$color2); //t

	echo $b===$c?"same":"different";

	// $a1=10;
	// $b1=5;
	// echo $a1<=>$b1;
 ?>