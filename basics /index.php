<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php website</title>
</head>
<body>
    <!-- php is an opensource scripting language -->
    <div class="wrapper">
       My First PHP 
        yooo
    </div>
    <?php
    define('PIyoyoyo',3.14); // defined as constant throughout prog.
        echo "Hello World"; 
    $variable1 = 35;
    $variable2 = 34;
    echo "<br>";
    echo $variable1; 
    echo "<br>";
    echo $variable2;
    echo "<hr>";
    echo $variable1 + $variable2;
    echo "<br>";
    echo var_dump(1==4);
    echo "<br>";
    echo var_dump(1!==4);
    echo "<br>";
    echo var_dump(1<=4);
    echo "<br>";
    echo var_dump(1>=4);
    echo "<br>";

    echo "<hr>";
    echo $variable1++; //35
    echo "<br>";
    echo $variable1--; //36
    echo "<br>";
    echo ++$variable1; //36
    echo "<br>";
    echo --$variable1; //35
    echo "<br>";

    echo "<hr>";
    $newVar = (false) and (true);
    echo "<br>";
    echo var_dump($newVar); 
    $newVar2 = (true) and (true);
    echo "<br>";
    echo var_dump($newVar2); 
    $newVar3 = (true) or (false);
    echo "<br>";
    echo var_dump($newVar3); 
    $newVar4 = (true xor true); //false
    echo "<br>";
    echo var_dump($newVar4); 

    echo "<hr>";
    echo "<br> Data types <br>";
    echo var_dump($variable1);

    echo "<hr>";
    echo (PIyoyoyo)
?>

</body>
</html>
