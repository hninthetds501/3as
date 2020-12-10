<?php
 echo"<h1>Hello by PHP echo</h1>";
 echo "<pre>";
 echo"
    This is php
    multipline comment
    Testing
    ";

  echo"<br>Hello escape \"sequence\" characters";

  $msg="Hello PHP";
  echo "<br>Message is: $msg";

  $fname="John";
  $lname="Smith";
  echo "<br>My name is: ".$fname,$lname;
  //print "My name is:".$fname,$lname;

  $lang="<br>PHP";
  $ret=print $lang." is a web development language.";
  print "<br>Value return by print statement: ".$ret;

  // $num=1;
  // $num1=2;
  // echo $num,$num1;

  
?>