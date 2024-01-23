<?php

$str = "My name is prasad patil";
echo $str;
echo "<br>";

$length = strlen($str);
echo"The length of this string is ==>> " . $length;
echo "<br>";
echo"The number of words in this string is ==>> " . str_word_count($str) ;

echo "<br>";
echo"The reversed  string is ==>> " . strrev($str) ;

echo "<br>";
echo"The search for is in this string is ==>> " . strpos($str,"is") ;

echo "<br>";
echo"The replaced string is ==>> " . str_replace("My name is", "i am", $str) ;






?>