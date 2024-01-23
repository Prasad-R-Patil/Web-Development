<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
       <h1> this is my first website</h1>
    </div>

   <?php 
   echo "hello word and this is printed php ";
   echo "<br>";
   echo "hello word again";
   echo "<br>";

  
 // Arethmatic Operator

   echo"<h1>Arethmatic Operator</h1>";
   echo "<br>";

   $var1 = 20;
   $var2 = 10;
   
   echo "Addition is variable ==>>", $var1+$var2;
   echo "<br>";
   echo "Substrction is variable ==>>", $var1-$var2;
   echo "<br>";
   echo "Multiplaction is variable ==>>", $var1*$var2;
   echo "<br>";
   echo "Division is variable ==>>", $var1/$var2;
   echo "<br>";


   // Assignment Operator
   echo"<h1>Assignment Operator</h1>";
   echo "<br>";


   $NewVar = $var1;
   $NewVar += 2;
   echo " the vlaue is new varibale is ==>> ",$NewVar;
   echo "<br>";
   $NewVar -= 2;
   echo " the vlaue is new varibale is ==>> ",$NewVar;
   echo "<br>";
   $NewVar *= 2;
   echo " the vlaue is new varibale is ==>> ",$NewVar;
   echo "<br>";
   $NewVar /= 2;
   echo " the vlaue is new varibale is ==>> ",$NewVar;
   echo "<br>";

   // Comparision Operator

   echo"<h1>Comparision Operator</h1>";
   echo "<br>";

   echo " The value of 1==4 is ==> ";
   echo var_dump(1 == 4);
   echo "<br>";
   echo " The value of 1!=4 is ==> ";
   echo var_dump(1 != 4);
   echo "<br>";
   echo " The value of 1>=4 is ==> ";
   echo var_dump(1>=4);
   echo "<br>";
   echo " The value of 1<=4 is ==> ";
   echo var_dump(1<=4);
   echo "<br>";

    // Increment/Decrement Operator

    echo"<h1>Increment/Decrement Operator</h1>";
    echo "<br>";
   
   echo"****************************************************";
   echo"<br>";
   echo "Value of Variable",$var1;
   echo"<br>";
   echo"the post-increment operator ==>> ", $var1++;
   echo "<br>";
   echo "Letest Value of Variable",$var1;
   echo"<br>";
   echo"****************************************************";
   echo"<br>";
   echo "Value of Variable",$var1;
   echo"<br>";
   echo"the post-Decremenet operator ==>> ",$var1--;
   echo "<br>";
   echo "Letest Value of Variable",$var1;
   echo"<br>";
   echo"****************************************************";
   echo"<br>";
   echo "Value of Variable",$var1;
   echo"<br>";
   echo"the pre-increment operator ==>> " ,++$var1;
   echo "<br>";
   echo "Letest Value of Variable",$var1;
   echo"<br>";
   echo"****************************************************";
   echo"<br>";
   echo "Value of Variable",$var1;
   echo"<br>";
   echo"the pre-Decremenet operator ==>> ", --$var1;
   echo "<br>";
   echo "Letest Value of Variable",$var1;
   echo"<br>";
   echo"****************************************************";
   echo"<br>";


   // Logical Operator

   echo"<h1>Logical Operator</h1>";
   echo "<br>";

   echo"****************************************************";
   echo"<br>";
    $myVar = (true and true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (true and false);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false and true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false and false);
    echo var_dump($myVar);
    echo "<br>";

    echo"****************************************************";
    echo"<br>";
    $myVar = (true or true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (true or false);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false or true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false or false);
    echo var_dump($myVar);
    echo "<br>";

    echo"****************************************************";
    echo"<br>";
    $myVar = (true xor true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (true xor false);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false xor true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false xor false);
    echo var_dump($myVar);
    echo "<br>";

    echo"****************************************************";
    echo"<br>";



    // Data Types ==>>>>

   echo"<h1>Data Types</h1>";
   echo "<br>";

   $var = "This is a string";
   echo var_dump($var);  
   echo "<br>";
   $var = 7777;
   echo var_dump($var); 
   echo "<br>";
   $var = 70.07;
   echo var_dump($var); 
   echo "<br>";
   $var = 2101.2002;
   echo var_dump($var); 
   echo "<br>";
   $var = true;
   echo var_dump($var); 
   echo "<br>";
   $var = array("11","21","31","41","51");
   echo var_dump($var); 
   echo "<br>";



   ?>
</body>
</html>