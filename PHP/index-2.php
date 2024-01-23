<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border box;
    }
    .container{
        max-width: 80%;
        background-color: pink;
        margin:auto;
        padding: 23px;
    }

</style>
<body>
    <div class="container">
        <h1> Lets learn about PHP</h1>
        <p>Your party status is hear</p>
        
        <?php
           $age = 34;
           if($age>18)
           {
            echo " you can go to the party";
           }
           else
           {
            echo " you can not go to the party";
           }
           echo "<br>";

           $languages = array("C ","C++ ","JAVA ","PHP");
           echo $languages[0];
           echo $languages[1];
           echo $languages[2];
           echo $languages[3];
           echo "<br>";
           echo "Number of languages ==> ",count($languages);

           echo "<br>";
           echo "<br>";

           // loops in php

           $a=0;

           while($a <=10)
           {
            echo "the value of a is : ";
            echo $a;
            echo "<br>";
            $a++;

           }

           echo "<br>";
           echo "<br>";


           // iterating arrays in PHP using while loop

           $a=0;

           while($a < count($languages))
           {
            echo "the value of Languages is : ";
            echo $languages[$a];
            echo "<br>";
            $a++;
           }

           echo "<br>";
           echo "<br>";

           // DO While loops in php

           $a=7777;

           
           do{
            echo "the value of a is : ";
            echo $a;
            echo "<br>";
            $a++;
           }while($a <=10);

           // for loop in PHP

           for($a=0;$a<=10;$a++)
           {
            echo "Value of a is :  ";
            echo $a;
            echo "<br>";
            
           }
           echo "<br>";
           echo "<br>";

           foreach($languages as $value)
           {
            echo "<br>The value form foreach loop is ";
            echo $value;
           }

           echo "<br>";
           echo "<br>";
           echo "<br>";

           function print5()
           {
            echo "FIVE";
            echo "<br>";
           }

            print5();
            echo "<br>";
            print5();
            echo "<br>";
            print5();
            echo "<br>";
            print5();
            echo "<br>";
            print5();
            echo "<br>";

            function print_number($number)
            {
                echo "<br> Your number is ==>> ",$number;
               // echo $number;
            } 

            print_number(11);
            print_number(21);
            print_number(51);
            print_number(101);
            


        ?>
    </div>
</body>
</html>