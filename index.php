


<?php
 echo "this is <b>php</b><br>";
// echo "<br>";
 print "I am Malvika";
 //datatypes integer float bool NULL(empty)  object(classes) array
 $var1="50";
 $var2="30";
 $var3=$var1+$var2;
 echo $var3;
 //global
 $a=5;
 $b=8;
 echo $a+$b;
 echo"<br>";
 function namesp()
 {
     //$a=5;$b=9;
     global $a,$b;
     echo $a+$b;
 }
 namesp();
 $str="Hello i am Malvika<br>Cute girl";
 var_dump($str);
 echo "$str From Dehradun";
 $s1="hi i am malvika";
 echo(strlen($s1));
 echo (strrev($s1));
 echo(str_word_count($s1));
 echo(str_word_count("hi babes"));
 echo(str_replace("malvika","world",$s1));
 $s2="hi this is php";
 echo $s2;
 echo"<br>";
 $a=590.5337732;
 echo(abs($a));
 echo"<br>";
 echo(round($a));
 //string operator
 function concat($a,$b)
 {
  echo "this is " . $a. "and is " .$b;
 }
 concat(2,3);
 ?>