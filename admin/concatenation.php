<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CONCATENATION</title>
</head>
<body>
    <?php 

    //PHP STRING
        /*
        A string is a sequence of characters, like "Hello world!".

        PHP String Functions

        Strlen()......String length function
        The strlen() function it return length of the string.
        for example we want to return length of the string "Hellow Ismaily your work is done!"
    */
    echo strlen("Hellow Ismaily your work is done!");
    echo "<br>";
    echo strlen("Ismaily");
    echo "<br>";
    echo strlen("Me and you");
    echo "<br>";

    /*
    str_word_count().....Count words in a string
    The PHP string_word_count() function it counts the number of words in a string.
    for example we want to count the number of words in a string "Hellow Ismaily your friends are coming"
    */
    echo str_word_count("Hellow Ismaily your friends are coming");
    echo "<br>";

    /*strrev()....Reverse a string
    The PHP strrev it reverses a string
    for example we want to reverse the string "My name is Ismaily Mofath!"
    */
    echo strrev("My name is Ismaily Mofath");
    echo "<br>";

    /*
    strpos().....searches for a specific text within the string.
    The PHP strpos() function it searches for specific text within a string.
    Then if a match is found; then the function returns the character position of the first match.
    And if there is no match found it will return "FALSE"
    note:The first character position in a string is "0" and not "1".
    for example we want to search "Ismaily" in the word "Hellow Ismaily your friends are coming!"
    */
    echo strpos("Hellow Ismaily your friends are coming!", "Ismaily");
    echo "<br>";

    /*
    str_replace......Replace text within the string
    The PHP str_replace() function it replace some characters with some other characters in string
    for example we want to replace the word Hellow with Hiii!! in a string Hellow Ismaily your friends are coming
    */
    echo str_replace("Hellow", "Hiii...", "Hellow Ismaily your friends are coming!");
    echo "<br><br>";

    //strtoupper
    //it change the text to the upper case
    $name = "ismaily mofath";
    strtoupper($name);
    echo "<br><br>";

    //strtolower
    //It change the text to the lower case
    strtolower($name);
    echo "<br>";

    // PHP NUMBERS
    /*
    note: One thing to notice about PHP is that; It provide automatic data type conversion
    So, if you assign an integer value to a variable, Then the type of that variable will be automatic an integer.
    Then, if you assign a string to same same variable , now the type will change to a string.
    but this automatic conversion can sometimes break your code.
    */

    //PHP INTEGER
    /*
    An integer: is number without any decimal part.
    for example: 
    2, 256, 10356, -179567, => these are all integers
    while 7.56, 150.67 are floating number.
    So, An integer is a non-decimal number between -2147483648 and 2147483647.
    So any value greater or lower than this will be stored as float, because it exceeds the limit of integer.
    The following are some rules for integers:
        =>An integer must have at least one digit,
        =>An integer must not have any decimal point,
        =>An integer can either be positive or negative,
        =>An integer can be specified in three formats which are:
            Decimal (10-based),
            Hexadecimal (16-based)-and it prefixed with 0x; or 
            Octal (8-based)- and it is prefixed with 0.
            
            PHP have the following functions to check if the type of variable is an integer:
                =>is_int()
                =>is_integer()  -alias of is_int()
                =>is_long()      -alias of is_int()
                
                Examples to check if the type of the variable is integer:
    */
    $q = 12345;

    var_dump(is_int($q));
    echo "<br>";
    
    $q = 12.34;
    var_dump(is_integer($q));
    echo "<br>";

    $r = 12;
    var_dump(is_long($r));
    echo "<br>";

    /*
    PHP FLOAT
    A float is a number with a decimal point or a number in exponential form.
    for examples
    2.0, 256.4, 10.358, 7.64E-5, => These are all floats.
    A float data type can commonly store a value up to 1.7976931348623E+308(Platform dependent), And it have the maximum precision of 14 digits.
    
    PHP has the following functions to check if the type of a variable is float:
        is_float()
        is_double()   - alias of is_float.

        examples to check if the type of the variable is float:
    */
    $u = 34.567;
    var_dump(is_float($u));
    echo "<br>";

    $f = 76890;
    var_dump(is_float($f));
    echo "<br>";

    /*
    PHP INFINITY
    Any number that is larger than PHP_FLOAT_MAX It considered as infinity.
    PHP have the following functions to check if a numeric value is finite or infinity
    is_finite()
    is_infinity()
    However, the PHP var_dump() function it returns the data type and value:

    Examples to check if a numeric value is finite or infinite:
    */
    $y = 1.9e411;
    var_dump($y);
    echo "<br>";

    $g = 345.56e678;
    var_dump(is_finite($g));
    echo "<br>";
    var_dump(is_infinite($g));
    echo "<br>";

    /*PHP NAN
    NAN stands for not a number.
    NAN is used for impossible mathematical operations.
    PHP have the following functions to check if the value is not a number:
        is_nan()

        However, the PHP var_dump() function it return the data type and value
        example;
        Invalid calculation will a NAN value;
    */
    $o = acos(8);
    var_dump($o);
    echo "<br>";

    var_dump(is_nan($o));
    echo "<br>";

    /*PHP NUMERICAL STRINGS
    The PHP is_numeric() function can be used to find whether a variable is numeric.
    The function it returns true if the variable is a number or numeric string, FALSE otherwise.
    */
    $k = 5985;
    var_dump(is_numeric($k));
    echo "<br>";

    $k = "5958";
    var_dump(is_numeric($k));
    echo "<br>";

    $k = "59.85" + 100;
    var_dump(is_numeric($k));
    echo "<br>";

    $k = "Hellow";
    var_dump(is_numeric($k));
    echo "<br>";
    echo "<br>";
    /*Note:From PHP 7.0: 
    The is_numeric() function will return FALSE for numeric strings in hexadecimal form
    (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.*/

    /*
    PHP CASTING STRINGS AND FLOATS TO INTEGERS
    Sometimes ypu may need to cast a numeric value into another data type.
    The (int), (integer) or intval() function are often used to convert a value to an integer.
    examples
    */
    //Casting float ti integer
    $k = 23465.769;
    $int_cast = (int)$k;
    echo $int_cast;
    echo "<br><br>";

    //Casting string to integer

    $k = "23465.768";
    $int_cast = (int)$k;
    echo $int_cast;
    echo "<br><br>";

    //PHP CONCATENATION
    $text1 = "Hellow world!";
    $text2 = "This is PHP";
    echo $text1. $text2;
    echo "<br><br>";

    $textOne = 'My Email is:';
    $textTwo = 'ismailymofath.0002@gmail.com';
    echo $textOne . $textTwo;
    echo "<br><br>";

    //PHP CONCATENATION ASSIGNMENT
    $text3 = "hellow mother";
    $text4 = "Am going to school";
    $text3 .= $text4;
    echo $text3;
    echo "<br><br>";

    /*PHP ARRAY OPERATORS
    PHP array operators are used to compare arrays*/


    //PHP UNION ARRAY OPERATOR
    /*
    it is the union of the two or more array variables
    A Union operator (+) is used to combine two arrays
    Then it return an array containing the all unique element from both arrays
    for example $x + $y;
    And if there are Duplicate keys in an array then the elements from the left arrays will be used
     */
    $x = array("a" => "Red", "b" => "Green", "c" => "White");
    $y = array("d" => "Blue", "e" => "Pink", "f" => "Violet");
    print_r($x + $y); //It is the union of the variables x and y
    echo "<br>";

    $Fruits = array("a" => "Banana", "b" => "mango", "c" => "Apple");
    $Ingredients = array("d" => "Blueberry", "e" => "cherry");
    $Result = $Fruits + $Ingredients;
    print_r($Result);
    echo "<br>";

    //PHP EQUALITY ARRAY OPERATOR
    /*
    The equality operator is used to compare if the two arrays have the same key/value pairs
    A php equality array operator it return true 
    if the both two arrays variables have the same key/value pairs, regardless of their order   
    
    $x == $y;
    */
    $First = array("First name" => "ISMAILY", "Middle name" => "MOFATH", "Last name" => "ZEFANIA");
    $Second = array("First name" => "ISMAILY", "Middle name" => "MOFATH", "Last name" => "ZEFANIA");
    foreach($First as $name => $value) {
        echo "$name = $value <br>";
    }
    var_dump($First == $Second);
    echo "<br>";
    
    $regions = array("MWANZA" => "Nyamagana", "ARUSHA" => "Meru", "RUKWA" => "Sumbawanga", "Kyela");
    $location = array("Sumbawanga" => "Kantalamba", "Meru" => "Oljoro", "Nyamagana" => "Sweya");
    var_dump($regions == $location);
    echo "<br>";
    
    $Food1 = array("g" => "Pawpaw", "h" => "Onion", "i" => "Apple");
    $Food2 = array("h" => "Onion", "i" => "Apple", "g" => "Pawpaw");
    var_dump($Food1 == $Food2);
    echo "<br>";

    //PHP IDENTITY OPERATOR
    /*
    Identical operator are used to compare if two arrays are identical
    meaning that they have the same key/value pair and in the same order
    for example $x === $y;
    */
    $Drinks = array("a" => "Energy", "b" => "Juice");
    $Water = array("a" => "Energy", "b" => "Juice");
    var_dump($Drinks === $Water);
    echo "<br>";
    var_dump($Drinks !== $Water);
    echo "<br>";
    
    //PHP INEQUALITY OPERATOR
    /*
    It return true if $x is not equal to $y
    $x != $y;
    */
    $m = array("a" => "Names", "b" => "Location", "c" => "Code");
    $n = array("d" => "Age", "e" => "Height", "f" => "Nationality");
    var_dump($m != $n);
    echo "<br>";
    var_dump($m <> $n);
    echo "<br>";

    //USER DEFINED FUNCTION
    /*A function it is a block of code that can be used repeatedly in a program
    A function will not execute automatically when a page loads
    unless a function will only be executed by a call to the function
    A user defined function declaration starts with the word function
    syntax
    function functionName() {
        code to be executed
    }
    but a function name must starts with letter or an underscore
    and the function name are not case sensitive
    top: Gives the function a name that reflects what the function does!
    */ 
    function writeMsg() {       //keyword function followed by the function name
        echo "Hellow world!";   //code to be executed
    }
    writeMsg();                 // call the function
    echo "<br>";
    
    //PHP FUNCTION ARGUMENTS
    /*
    Information can be passed to the function through arguments
    An argument is just like a variable
    An argument is specified after the function name,inside the parentheses
    you can add as many arguments as you want, just separate them with a comma
    */
    function familyName($firstName, $year) {
        echo "$firstName. $year <br>";
    }
    familyName("Ismaily", "2000");
    familyName("Mofath", 1956);
    familyName("Zefania", "2002");
    echo "<br>";

    //A PHP IS A LOOSELY TYPED LANGUAGE
    /*
    As you notice in the examples above, we did not have to tell PHP on which data type the variable is
    PHP it automatically associates a data type to the variables depending on its value;
    Since data type are not set in a strict sense, then you can do things like adding a string to an integer without causing an error
    In PHP 7, type declaration were added; these gives us an option to specify the expected data types when declaring a function
    And by adding a strict declaration, it will throw away the "Fatal error" if the data types mismatch;
    in the following example we try to send both a Number and a String without using strict;
    */
    function addNumbers(int $a, int $b) {
        return $a + $b;
    } 
    echo addNumbers(5, 5);   //since strict is not enabled, then "5days" is changed to int(5), and it will return 10;
    echo "<br>";

    /*To specify strict we need to set declare(strict_types=1);. 
    This must be on the very first line of the PHP file.
    In the following example we try to send both a number and a string to the function, 
    but here we have added the strict declaration:
    strict declaration it forces things to be used in intended way; 
    */
    function Numbers(int $a, int $b) {
        return $a + $b;
    } 
    echo Numbers(5, 10);   //since strict is enabled and "5 days" is not an integer, an error will be thrown;
    echo "<br>";


    //PHP CONDITIONAL STATEMENTS
    /*
    In PHP, conditional statements are used to make decisions based on certain conditions.
    Conditional statements are used to perform different actions based on different conditions
    Very often when you write code, you want to perform different actions for different conditions. 
    You can use conditional statements in your code to do this.
    */

    //If statement
    /*
    The if statement executes a block of code if a specified condition is true. 
    It has the following syntax:
    if (condition) {
    code to be executed if the condition is true
    }
    Example
    Output "Have a good day!" if the current time (HOUR) is less than 20:
        */
        $t = date("H");
        if($t < "20") {
            echo "Have a good day!";
        }
        echo "<br>";

        //PHP if..........else statement
        /*
        The if-else statement executes a block of code if the specified condition is true, and another block of code if the condition is false.
         It has the following syntax:
         if (condition) {
            code to be executed if the condition is true
        } 
        else {
            code to be executed if the condition is false
        }
        Example
        Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:
            */

            $k = date("H");
            if($k < "20") {
                echo "Have a good day!";
            }
            else {
                echo "Have a good night";
            }
            echo "<br>";

            //PHP - The if...elseif...else Statement
            /*
            The if...elseif...else statement executes different codes for more than two conditions.
            The if-elseif-else statement allows you to evaluate multiple conditions.
            It executes different blocks of code based on different conditions.
            Syntax
            if (condition) {
                code to be executed if this condition is true;
            } 
            elseif (condition) {
                code to be executed if first condition is false and this condition is true;
            } 
            else {
                code to be executed if all conditions are false;
            }
            Example
            Output "Have a good morning!" if the current time is less than 10, "Is not morning if the current time = 11",
            and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":
                */
                $q = date("H");

                if($q < "10") {
                    echo "Have a good morning!";
                }
                
                elseif($q == "11") {
                    echo "Is not morning!";
                }

                elseif($q < "20") {
                    echo "Have a good day!";
                }
                else {
                    echo "Have a good night!";
                }
                echo "<br>";

                //The PHP switch Statement
                /*The switch statement is used to perform different actions based on different conditions.
                It is often used as an alternative to multiple if statements
                Use the switch statement to select one of many blocks of code to be executed.
                Syntax
                switch (n) {
                    case label1:
                        code to be executed if n=label1;
                        break;
                        case label2:
                            code to be executed if n=label2;
                            break;
                            case label3:
                                code to be executed if n=label3;
                                break;
                                    
                                    default:
                                    code to be executed if n is different from all labels;
                                }
                                This is how it works: 
                                First we have a single expression n (most often a variable), that is evaluated once. 
                                The value of the expression is then compared with the values for each case in the structure. 
                                If there is a match, the block of code associated with that case is executed. 
                                Use break to prevent the code from running into the next case automatically. 
                                The default statement is used if no match is found.
                                */
                                $favoriteColor = "red";

                                switch($favoriteColor) {
                                    case "red":
                                        echo "Your favorite color is red!";
                                        break;

                                        case "blue":
                                            echo "Your favorite color is blue!";
                                            break;

                                            case "green":
                                                echo "Your favorite color is green!";
                                                break;

                                                default:
                                                echo "Your favorite color is neither red, blue, nor green!";
                                            }
                                            echo "<br>";

                                            //PHP Loops
                                            /*
                                            In PHP, loops are used to execute a block of code repeatedly based on a specific condition.
                                            Often when you write code, you want the same block of code to run over and over again a certain number of times. 
                                            So, instead of adding several almost equal code-lines in a script, we can use loops.
                                            Loops are used to execute the same block of code again and again, as long as a certain condition is true.
                                            In PHP, we have the following loop types:
                                            while - loops through a block of code as long as the specified condition is true
                                            do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
                                            for - loops through a block of code a specified number of times
                                            foreach - loops through a block of code for each element in an array
                                            */


                                            //PHP for Loop
                                            /*
                                            The for loop is used when you know the number of times you want to execute a block of code.
                                            The for loop - Loops through a block of code in a specified number of times.
                                            The for loop is used when you know in advance how many times the script should run.
                                            Loops are essential in PHP programming as they allow you to automate repetitive tasks, 
                                            iterate over arrays, and process data efficiently. 
                                            By choosing the right loop type based on your requirements, 
                                            you can effectively control the flow of your PHP code and perform complex operations with ease.
                                            Syntax
                                            for (init counter; test counter; increment counter) {
                                                code to be executed for each iteration;
                                                Parameters:
                                                init counter: Initialize the loop counter value
                                                test counter: Evaluated for each loop iteration. 
                                                If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
                                                increment counter: Increases the loop counter value
                                                Examples
                                                The example below displays the numbers from 0 to 10:
                                                */
                                                for($l = 0; $l <= 10; $l++) {
                                                    echo "The number is: $l<br>";
                                                }
                                                /*
                                                Example Explained
                                                $x = 0; - Initialize the loop counter ($x), and set the start value to 0
                                                $x <= 10; - Continue the loop as long as $x is less than or equal to 10
                                                $x++ - Increase the loop counter value by 1 for each iteration
                                                */
                                                echo "<br>";
                                                for($v = 0; $v <= 100; $v += 10) {
                                                    echo "The number is: $v <br>";
                                                }
                                                
                                                /*
                                                Example Explained
                                                $x = 0; - Initialize the loop counter ($x), and set the start value to 0
                                                $x <= 100; - Continue the loop as long as $x is less than or equal to 100
                                                $x+=10 - Increase the loop counter value by 10 for each iteration
                                                */
                                                echo "<br>";
                                                //Create a loop that runs from 0 to 9.
                                                for($i = 0; $i < 10; $i++) {
                                                     echo $i. "<br>";
                                                    }
                                                    echo "<br>";

                                                    //PHP while Loop
                                                    /*The while loop - Loops through a block of code as long as the specified condition is true.
                                                    The while loop executes a block of code as long as the specified condition is true.
                                                    Syntax
                                                    while (condition is true) {
                                                            code to be executed;
                                                        }

                                                        $i = 0;
                                                        while ($i < 5) {
                                                             code to be executed
                                                             $i++;
                                                            }
                                                            */
                                                            $t =0;

                                                            while($t <= 100) {
                                                                echo "The number is: $t <br>";
                                                                $t += 10;
                                                            }

                                                            /*
                                                            Example Explained
                                                            $x = 0; - Initialize the loop counter ($x), and set the start value to 0
                                                            $x <= 100 - Continue the loop as long as $x is less than or equal to 100
                                                            $x+=10; - Increase the loop counter value by 10 for each iteration
                                                            */
                                                            echo "<br>";
                                                            //Output $i as long as $i is less than 6.
                                                            $i = 1;
                                                            while ($i < 6) {
                                                                  echo $i. "<br>";
                                                                  $i++;
                                                                }
                                                                echo "<br>";

                                                                //PHP do while Loop
                                                                /*
                                                                The do...while loop - Loops through a block of code once, 
                                                                and then repeats the loop as long as the specified condition is true.
                                                                The do-while loop is similar to the while loop, 
                                                                but the condition is evaluated after the block of code is executed. 
                                                                This guarantees that the code block will be executed at least once.
                                                                
                                                                Syntax
                                                                do {
                                                                    code to be executed;
                                                                } 
                                                                while (condition is true);

                                                                Examples
                                                                The example below first sets a variable $x to 1 ($x = 1). 
                                                                Then, the do while loop will write some output, 
                                                                and then increment the variable $x with 1. 
                                                                Then the condition is checked (is $x less than, or equal to 5?), 
                                                                and the loop will continue to run as long as $x is less than, or equal to 5:

                                                                Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. 
                                                                This means that the do...while loop will execute its statements at least once, even if the condition is false. 
                                                                */
                                                                $x = 1;

                                                                do {
                                                                    echo "The number is: $x <br>";
                                                                    $x++;
                                                                }
                                                                while ($x <= 5);
                                                                echo "<br>";

                                                                //This example sets the $z variable to 6, then it runs the loop, and then the condition is checked:
                                                                $z = 6;

                                                                do{
                                                                    echo "The number is: $z <br>";
                                                                    $z++;
                                                                }
                                                                while($z <= 5);
                                                                echo "<br>";

                                                                //PHP foreach Loop
                                                                /*
                                                                The foreach loop - Loops through a block of code for each element in an array.
                                                                The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
                                                                The foreach loop is used to iterate over arrays or objects. 
                                                                It simplifies the process of looping through array elements without using explicit index variables.
                                                                Syntax
                                                                foreach ($array as $value) {
                                                                    code to be executed;
                                                                }

                                                                For every loop iteration, 
                                                                the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
                                                                Examples
                                                                The following example will output the values of the given array ($colors):
                                                                */
                                                                $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

                                                                foreach($age as $x => $val) {
                                                                    echo "$x = $val<br>";
                                                                }
                                                                echo "<br><br>";

                                                                //PHP TABLES
                                                                /*In PHP, you can generate HTML tables dynamically by using PHP code to loop through data and output the table structure.
                                                                 Here's an example of how you can create a simple HTML table in PHP:
                                                                
                                                                 Sample data for the table
                                                                 */
                                                                 $users = array(
                                                                    array("John Doe", "john.doe@example.com", "25"),
                                                                    array("Jane Smith", "jane.smith@example.com", "30"),
                                                                    array("Alice Johnson", "alice.johnson@example.com", "28")
                                                                );
                                                                //Output the table structure
                                                                echo "<table border='1'>";
                                                                echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";

                                                                // Loop through the data and output table rows
                                                                foreach ($users as $user) {
                                                                        echo "<tr>";

                                                                        foreach ($user as $value) {
                                                                            echo "<td>$value</td>";
                                                                            }
                                                                                echo "</tr>";
                                                                            }
                                                                            echo "</table>";
/*In this example:                                                                           
- We have an array `$users` containing user data (name, email, age).
- We use a `foreach` loop to iterate over each user in the array.
- Within the loop, we output each user's data as a table row (`<tr>`) with each value as a table cell (`<td>`).
- We also output the table header row (`<th>`) with column names.

When you run this PHP script, it will generate an HTML table with the user data. 
You can customize the table structure, styling, and data based on your specific requirements. 
This approach allows you to dynamically generate tables in PHP based on the data you have, 
making it easy to display structured information on a web page.
*/


    ?>
    
</body>
</html>