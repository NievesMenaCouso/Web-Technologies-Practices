<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 </head>
 <body>
<!-- FUNCTIONS -->
    <!-- Example 1 FUNCTION -->
    <?php
        function go(){
            echo("PHP is great for adding dynamic content");
        }
        go();
    ?>
    <!-- Example 2 FUNCTION ARGUMENT --> 
    <?php 
        function go2($arg){ 
            echo("<h1>$arg</h1>"); 
        }
        go2("PHP is great for adding dynamic content");
    ?>
    <!-- Example 3 MULTIPLE FUNCTIONS --> 
    <?php 
        function shownum($num){
            $newnum = make_double($num);
            echo("The value is $newnum<br>");
        }
        function make_double($arg){
            return $arg + $arg;
        }
        shownum(4);
    ?>
    <!-- Example 4 VARIABLE SCOPE --> 
    <?php
        $num;
        function triplenum($arg){
            global $num;
            $num = $arg + $arg + $arg;
            three();
        }
        function three(){
            global $num;
            echo("The value is $num<br>");
        }
        triplenum(4);
    ?>
    <!-- Activity 1 CREATE A FUNCTION --> 
    <?php
        //1
        $result = 5+5;
        //2
        function root($arg){
            $result = sqrt($arg);
            echo("The square root is $result<br>");
        }
        //3
        function cube($arg){
            $result = $arg * $arg * $arg;
            echo("The cube is $result<br>");
        }
        //4
        echo ("The global variable is $result<br>");
        root(4);
        cube(4);
    ?>
    <!-- Activity 2 PASSING ARGUMENTS --> 
    <?php
        //1
        $number = 5;
        //2
        function square2($arg){
            $result = sqrt($arg);
            echo("The square root is $result<br>");
        }
        //3
        function cube2(){
            global $number;
            $result = $number * $number * $number;
            echo("The cube is $result<br>");
        }
        //4
        square2($number);
        cube2();
    ?>
    <!-- Activity 3 RETURNED VALUES -->
    <?php
        //1
        date_default_timezone_set("Europe/London");
        $me = "Nieves Mena Couso";
        //2
        function myDate(){
            echo date("l jS \of F");
        }
        //3
        function dayGreet(){
            $time = date("e");
            // If the time is less than 1200 hours, show good morning //
            if ($time < "12") {
                echo "Good morning ";
            } else
            // If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon //
            if ($time >= "12" && $time < "17") {
                echo "Good afternoon ";
            } else
            // Should the time be between or equal to 1700 and 1900 hours, show good evening //
            if ($time >= "17" && $time < "19") {
                echo "Good evening ";
            } else
            // Finally, show good night if the time is greater than or equal to 1900 hours //
            if ($time >= "19") {
                echo "Good night ";
            }
        }
        //4
        dayGreet();
        echo ("$me, today is ");
        myDate();
        echo "<br>";
    ?>
<!--  CONDITIONAL STATEMENTS -->
    <!-- Activity 1 CONDITIONAL IF --> 
    <?php
        $num = 7;
        function even($num){
            if ($num%2 == 0) {
                echo ("$num is even <br>");
            } else {
                echo ("$num is odd <br>");
            }
        }
        even($num);
    ?>
    <!-- Activity 2 CONDITIONAL IF ELSE Same as 1???--> 
    <?php
        $num = 6;
        function even2($num){
            if ($num%2 == 0) {
                echo ("$num is even <br>");
            } else if ($num%2 != 0){
                echo ("$num is odd <br>");
            }
        }
        even2($num);
    ?>
    <!-- Activity 3 CONDITIONAL ELSE IF --> 
    <?php
        if (4>2){
            echo "4 is larger than 2<br>";
        }
        if (4>2 and 8>4){
            echo "Also, 8 is larger than 4 <br>";
        }
        if (4>8){
            echo "4 is larger than 8 <br>";
        } else {
            echo "4 is not larger than 8 <br>";
        }
        if (4>8 XOR 8>4){
            echo "One or both expressions are false<br>";
        }
    ?>
<!-- LOOPS -->
    <!-- Activity 1 FOR LOOP--> 
    <?php
        for ($x = 0; $x <= 50; $x+=10){
            echo "The number is $x<br>";
        }
    ?>
    <!-- Activity 2 WHILE LOOP --> 
    <?php
        for ($x = 1; $x <= 3; $x++){
            echo "<b>Outer loop iteration $x</b><br>";
            for ($y = 1; $y <= 3; $y++){
                echo "Inner loop iteration $y<br>";
            }
        }
        echo "<br>";
        $x=1;
        $y=1;
        while ($x <= 3){
            echo "<b>Outer loop iteration $x</b><br>";
            for ($y = 1; $y <= 3; $y++){
                echo "Inner loop iteration $y<br>";
            }
            $x++;
        }
    ?>
    
</body>
</html>