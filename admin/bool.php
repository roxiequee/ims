<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //PHP equal comparison operator (==)
    //Equal operator it must return true if the two variables ere equal
    //otherwise it return false
    $x = 40;
    $y = 50;
    var_dump($x == $y);
    //It should return false because the values are not equal
    echo "<br>";
    $z = 40;
    var_dump($x == $z);
    //It should return true because the values are equal
    echo "<br>";

    //PHP IDENTICAL OPERATORS (===)
    //identical operators return true if the two variables are equal and are of the same type
    $t = 50;
    $b = 50;
    var_dump($t === $b); //It should return true because the two variable are equal and are of the same type
    echo "<br>";
    $k = "50";
    var_dump($t === $k); //It should return false because the two variables are equal not are not of the same type
    echo "<br>";
    
    //PHP NOT EQUAL OPERATOR  (!=)
    //A not equal operator it return return true if the two variable compared are not equal
    var_dump($t != $b); // it should return false because the values compared are equal
    echo "<br>";
    var_dump($b != $z); //It should return true because the two variables are not equal
    echo "<br>";
    var_dump($t <> $b); 
    echo "<br>";
    var_dump($k !== $z);
    echo "<br>";
    var_dump($t !== $b);
    echo "<br>";
    var_dump($k > $z);
    echo "<br>";
    var_dump($t >= $b);
    echo "<br>";
    var_dump($t < $b);
    echo "<br>";
    echo $k++;
    echo "<br>";
    echo ++$k;
    echo "<br>";
    echo $k--;
    echo "<br>";
    echo --$k;
    echo "<br>";

    //PHP LOGICAL OPERATOR
    //PHP AND OPERATOR
    //It return true if both operators are equal
    if($t == 50 and $b == 50) {
        echo "BOTH VARIABLES ARE TRUE";
    }
    echo "<br>";
    if($t == 50 and $b ==10) {
        echo "HELLOW WORLD!";
    }
    echo "<br>";
    //PHP OR OPERATOR
    //It return true if either of the operator is true
    if($t == 50 or $b == 40) {
        echo "HII!!!";
    }
    echo "<br>";

    //PHP XOR OPERATOR
    //It return true if either of the operator is true but not both
    if ($t == 50 xor $b ==40) {
        echo "HELLOW";
    }
    echo "<br>";
    //PHP ARRAY OPERATOR
    //UNION OPERATOR
    $h = array("a" => "ISMAILY", "b" => "MOFATH", "C" => "ZEFANIA",);
    $w = array("d" => "MOHAMED", "e" => "MADARAKA", "f" => "KASENGA");
    print_r($h + $w);
    echo "<br>";

    //EQUALITY ARRAY OPERATOR
    $family = array("a" => "ISMAILY MOFATH", "b" => "MOHAMED MOFATH", "c" => "DANIEL ZEFANIA");
    $nick = array("1" => "ISMAILY MOFATH", "2" => "MOHAMED MOFATH", "3" => "DANIEL ZEFANIA");
    var_dump($family == $nick);
    echo "<br>"n

    $age = 10;
    $result = ($age<20);
    echo "Result is". $result;
        ?>  
</body>
</html>