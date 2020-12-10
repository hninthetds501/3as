<?php 
	//Defines a constant value
	//const PI=3.14;
	define('PI',3.14);
	function square(int $radius=10):float{
		return PI*($radius**2);
	}
	echo square(15);
	$mysqure=sprintf('%.2f',square(15));
    echo "<br>Circle area with sprintf format is $mysqure<br>";
	printf("Circle area with printf format is %0.2f",square(15));
	
	function checkzipcode($code){
		if(strlen($code)==5){
			echo "<br>Your code is $code and your code length is ".strlen($code);
		}
		else{
			echo "<br>Your code length ".strlen($code)." is not valid";
		}
	}
	checkzipcode(1235);

	// global variable
	$str="Mandalay";
	function say_hello(){
		global $str;
		echo "<h1>Hello ".$str."</h1>";
		echo "<h1>Hello ".$GLOBALS['str']."</h1>";
	}
	say_hello();

