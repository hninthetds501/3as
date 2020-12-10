<?php
//Local and global

 $num1=10; //global
 function calculate(){
     $num2=15; //local

     //echo $num1; //error
     echo "<br>".$GLOBALS['num1'];
     echo "<br>".$num2;
 }
 calculate();
 echo $num1;
 //echo $num2; //error

 //staic
 //once variables completes its execution and memory is freed but
 function static_var(){
     static $a=12;
     $b=12;
     $a++;
     $b++;

     echo "<br>Static: ".$a;
     echo "<br>Non-Static: ".$b;
 }
 static_var();
 static_var();

?>
