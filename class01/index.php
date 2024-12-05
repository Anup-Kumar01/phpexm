<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Class_01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="php_exampls">
        <?php
        echo "Welcome to PHP class"."<br>";
        ?>
        <hr>

        <?php
        $x = 8;      // $x is an integer
        $y = "Rahim"; // $y is a string

        echo $x ."<br>";
        echo $y."<br>";
        ?>
        <?php
        $x = 5;
        var_dump($x)."<br>";
        ?>
        <hr>  
        <?php
        $x = $y = $z = "Fruit";

        echo $x ."<br>";
        echo $y ."<br>";
        echo $z ."<br>";
        ?>
        <?php
        $x = 5; // global scope
         

        myTest();

        echo "<p>Variable x outside function is: $x</p>" ."<br>";
        ?>
        <hr>
        <?php
        function myTest() {
          static $x = 0;
          echo $x;
          $x++;
        }

        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();
        ?>
        <hr>
        <?php
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        ?>
        <hr>
        <?php  
        $x = 10.365;
        var_dump($x);
        ?>
        <hr>
        <?php  
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);
        ?>
        <hr>
        <?php
        class Car {
          public $color;
          public $model;
          public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
          }
          public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
          }
        }

        $myCar = new Car("red", "Volvo");
        var_dump($myCar);
        ?>
        <hr>
        <?php
        $x = 5;
        var_dump($x);

        echo "<br>";

        $x = "Hello";
        var_dump($x);
        ?>
        <hr>
        <?php
        echo strpos("Hello world!", "world");
        ?> 
        <hr>
        <p>Upper Case</p>
        <?php
        $x = "Hello World!";
        echo strtoupper($x);
        ?>
        <hr>
        <p>Lower Case</p>
        <?php
        $x = "Hello World!";
        echo strtolower($x);
        ?>
        <hr>
        <p>Replace String</p>
        <?php
        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);
        ?>
        <hr>
        <h2>Remove Whitespace</h2>
        <p>The whitespaces are invisible in plain HTML,<br>
        but check out the difference in two input fields:</p>

        <?php
        echo "<input value='" . $x . "'>";
        echo "<br>";
        echo "<input value='" . trim($x) . "'>";
        ?>
        <hr>
        <?php
        $x = "Hello World!";
        $y = explode(" ", $x);

        //Use the print_r() function to display the result:
        print_r($y);
        ?> 
        <hr>
        <h2>String Concatenation</h2>
        <?php
        $x = "Hello";
        $y = "World";
        $z = "$x $y";
        echo $z;
        ?>
        <hr>
        <h2>Slice to the End</h2>
        <?php
        $x = "Hello World!";
        echo substr($x, 6);
        ?>
        <hr>
        <h2>Slice From the End</h2>
        <?php
        $x = "Hello World!";
        echo substr($x, -5, 3);
        ?>
        <hr>
        <h2>Negative Length</h2>
        <?php
        $x = "Hi, how are you?";
        echo substr($x, 5, -3);
        ?>
        <hr>
        <h2>Escape Character New Line</h2>
        <pre>
        <?php
        $x = "Hello\nWorld";
        echo $x;
        ?>
        </pre>
        <hr>
        <h2>Escape Character PHP variables</h2>
        <pre>
        <?php
        $x = "Escape php variable name \$myvar";
        echo $x;
        ?> 
        </pre>
        <hr>
        <h2>Escape Character Hex value</h2>
        <pre>
        <?php
        $x = "\x48\x65\x6c\x6c\x6f";
        echo $x;
        ?> 
        </pre>
        <hr>
        <h2>Escape Character Single Quote</h2>
        <pre>
        <?php
        $x = 'We are the so-called \'Vikings\' from the north.';
        echo $x;
        ?>  
        </pre>
        <hr>
        <h2>Escape Character  Double Quote</h2>
        <pre>
        <?php
        $x = "We are the so-called \"Vikings\" from the north.";
        echo $x;
        ?>   
        </pre>
        <hr>
        <h2>PHP Integers</h2>
        <?php
        // Check if the type of a variable is integer   
        $x = 5985;
        var_dump(is_int($x));

        echo "<br>";

        // Check again... 
        $x = 59.85;
        var_dump(is_int($x));
        ?>
        <hr>
        <h2>PHP Floats</h2>
        <?php
        // Check if the type of a variable is float 
        $x = 59.85;
        var_dump(is_float($x));
        ?>
        <hr>
        <h2>PHP Infinity</h2>
        <?php
        // Check if a numeric value is finite or infinite 
        $x = 1.9e411;  
        var_dump($x);
        ?>  
        <hr>
        <h2>PHP Casting Strings and Floats to Integers</h2>
        <?php
        // Cast float to int 
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
          
        echo "<br>";

        // Cast string to int
        $x = "234005.768";
        $int_cast = (int)$x;
        echo $int_cast;
        ?>
        <hr>
        <h2>PHP min() and max() Functions</h2>
        <?php
        echo(min(0, 150, 30, 20, -8, -200) . "<br>");
        echo(max(0, 150, 30, 20, -8, -200));
        ?>
        <hr>
        <h2>PHP abs() Function</h2>
        <?php
        echo(abs(-6.7));
        ?>
        <hr>
        <h2>PHP sqrt() Function</h2>
        <?php
        echo(sqrt(64) . "<br>");
        echo(sqrt(0) . "<br>");
        echo(sqrt(1) . "<br>");
        echo(sqrt(9));
        ?>
        <hr>
        <h2>Create a PHP Constant</h2>
        <?php
        // case-sensitive constant name
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
        ?>
        <hr>
        <h2>PHP const Keyword</h2>
        <?php
        const MYCAR = "Volvo";

        echo MYCAR;
        ?>
        <hr>
        <h2>PHP Constant Arrays</h2>
        <?php
        define("cars", [
          "Alfa Romeo",
          "BMW",
          "Toyota"
        ]);
        echo cars[0];
        ?>
        <hr>
        <h2>PHP Arithmetic Operators</h2>
        <h4> Addition</h4>
        <?php
        $x = 10;  
        $y = 6;

        echo $x + $y;
        ?>
        <hr>
        <h4>Subtraction</h4>
        <?php
        $x = 10;  
        $y = 6;

        echo $x - $y;
        ?>
        <hr>
        <h4>  Modulus</h4>
        <?php
        $x = 10;  
        $y = 6;

        echo $x % $y;
        ?>
        <hr>
        <h4>Exponentiation</h4>
        <?php
        $x = 10;  
        $y = 3;

        echo $x ** $y;
        ?>
        <hr>
        <h2>PHP Assignment Operators</h2>
        <h4>  Addition</h4>
        <?php
        $x = 20;  
        $x += 100;

        echo $x;
        ?>
        <hr>  
        <h4>Multiplication</h4>
        <?php
        $x = 5;
        $x *= 6;

        echo $x;
        ?>
        <hr>
        <h2>PHP Comparison Operators</h2>
        <h4>  Equal</h4>
        <?php
        $x = 100;  
        $y = "100";

        var_dump($x == $y); // returns true because values are equal
        ?>
        <hr>
        <h4>Identical</h4>
        <?php
        $x = 100;  
        $y = "100";

        var_dump($x === $y); // returns false because types are not equal
        ?>
        <hr>
        <h4>Not identical</h4>
        <?php
        $x = 100;  
        $y = "100";

        var_dump($x !== $y); // returns true because types are not equal
        ?>
        <hr>
        <h4>  Greater than</h4> 
        <?php
        $x = 100;
        $y = 50;

        var_dump($x > $y); // returns true because $x is greater than $y
        ?>
        <hr>
        <h4>  Spaceship</h4>
        <?php
        $x = 5;  
        $y = 10;

        echo ($x <=> $y); // returns -1 because $x is less than $y
        echo "<br>";

        $x = 10;  
        $y = 10;

        echo ($x <=> $y); // returns 0 because values are equal
        echo "<br>";

        $x = 15;  
        $y = 10;

        echo ($x <=> $y); // returns +1 because $x is greater than $y
        ?> 
        <hr>
        <h2>PHP Increment / Decrement Operators</h2>
        <h4>  Pre-increment</h4>
        <?php
        $x = 10;  
        echo ++$x;
        ?>
        <hr>
        <h4>  Post-increment</h4>
        <?php
        $x = 10;  
        echo $x++;
        ?>
        <hr>
        <h4>  Pre-decrement</h4>
        <?php
        $x = 10;  
        echo --$x;
        ?> 
        <hr>
        <h4>  Post-decrement</h4>
        <?php
        $x = 10;  
        echo $x--;
        ?>
        <hr>
        <h2>PHP Logical Operators</h2>
        <h4>  And</h4>
        <p>Write a message if both conditions are true.</p>

        <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 and $y == 50) {
            echo "Hello world!";
        }
        ?>
        <hr>
        <h4>  Not</h4>
        <p>Write a message if the condition is NOT true.</p>

        <?php
        $x = 100;  

        if (!($x == 90)) {
            echo "Hello world!";
        }
        ?> 
        <hr>
        <h2>PHP String Operators</h2>
        <h4>  Concatenation</h4>
        <?php
        $txt1 = "Hello";
        $txt2 = " world!";
        echo $txt1 . $txt2;
        ?> 
        <hr>
        <h4>Concatenation assignment</h4>
        <?php
        $txt1 = "Hello";
        $txt2 = " world!";
        $txt1 .= $txt2;
        echo $txt1;
        ?>
        <hr>
        <h2>PHP Array Operators</h2>
        <h4>  Equality</h4>    
        <?php
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  

        var_dump($x == $y);
        ?>
        <hr>
        <h2>PHP Conditional Assignment Operators</h2>
        <h4>  Ternary</h4>
        <?php
           // if empty($user) = TRUE, set $status = "anonymous"
           echo $status = (empty($user)) ? "anonymous" : "logged in";
           echo("<br>");

           $user = "John Doe";
           // if empty($user) = FALSE, set $status = "logged in"
           echo $status = (empty($user)) ? "anonymous" : "logged in";
        ?>
        <hr>
        <h4>Null coalescing</h4>
        <?php
           // variable $user is the value of $_GET['user']
           // and 'anonymous' if it does not exist
           echo $user = $_GET["user"] ?? "anonymous";
           echo("<br>");
          
           // variable $color is "red" if $color does not exist or is null
           echo $color = $color ?? "red";
        ?>
        <hr>
        <h2>PHP - The if Statement</h2>
        <?php
        $t = 14;

        if ($t < 20) {
          echo "Have a good day!";
        }
        ?>
        <hr>
        <h2>PHP - The if...else Statement</h2>
        <?php
        $t = date("H");
        echo "<p>The hour (of the server) is " . $t; 
        echo ", and will give the following message:</p>";

        if ($t < "10") {
          echo "Have a good morning!";
        } elseif ($t < "20") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }
        ?>
        <hr>
        <h2>PHP Nested if Statement</h2>
        <?php
        $a = 13;

        if ($a > 10) {
          echo "Above 10";
          if ($a > 20) {
            echo " and also above 20";
          } else {
            echo " but not above 20";
          }
        }
        ?>
        <hr>
        <h2>PHP Loops</h2>
        <h4>The PHP while Loop</h4>
        <?php  
        $i = 1;

        while ($i < 6) {
          echo $i;
          $i++;
        } 
        ?>
        <hr>
        <h4>The PHP do...while Loop</h4>
        <?php  
        $i = 8;

        do {
          echo $i;
          $i++;
        } while ($i < 6);
        ?>

        <p>As you can see, the code is executed once, even if the condition is never true.</p> 
        <hr>
        <h4>The PHP for Loop</h4>
        <?php  
        for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
        }
        ?>
        <hr>
        <h4>The foreach Loop on Arrays</h4>  
        <?php  
        $colors = array("red", "green", "blue", "yellow"); 

        foreach ($colors as $x) {
          echo "$x <br>";
        }
        ?> 
      
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>