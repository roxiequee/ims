<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OPERATORS</title>
</head>
<body>
    <?php
    //PHP ARITHMETIC OPERATOR
    $x = 40;
    $y = 50;
    $sum = $x + $y;
    //Addition or summation
    echo $x + $y;
    echo "<br>";
    echo $sum;
    echo "<br>";
    /*Multiplication*/
    echo $x * $y;
    echo "<br>";
    //Division
    echo $x / $y;
    echo "<br>";
    //Multiplication
    echo $y - $x;
    echo "<br>";
    //Modulus
    echo $y % $x;
    echo "<br>";
    //Exponentiation
    $c = 10;
    $d = 2;
    echo $c ** $d;

    echo "<br>";
    //PHP ASSIGNMENT OPERATOR
    /*The PHP Assignment operators are used with the numeric values to write the value on the variables*/
    $v = 200;
    echo $v;
    echo "<br>";
    // x+=y  ==    x = x+y;
    $p = 40;
    $p += 20;
    echo $p;
    echo "<br";

    //x-=y   ==   x = x-y;
    $a = 30;
    $a -= 20;
    echo $a;
    echo "<br";

    //x*=y    ==     x = x * y;
    $f = 20;
    $f *= 2;
    echo $f;
    echo "<br>";

    // x/=y   ==     x = x / y;

    $z =20;
    echo $z/=10;
    echo $z;
    echo "<br>";

    // x%=y    ==    x = x % y;
    echo $a%=$f;
    echo "<br>";
    
    ?>
    
</body>
</html>