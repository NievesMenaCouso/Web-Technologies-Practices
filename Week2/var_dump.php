<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Getting started with PHP</title>
	</head>
	<body>
		<?php
			# traditional greeting
			$a= "You're my wonderwall.";
			#var_dump () funcion
			var_dump ($a);
			echo "<br>";
			# integer
			$b=234;
			var_dump ($b);
			echo "<br>";
			# floating point
			$c=32.589;
			var_dump ($c);
		?>
		<?php
			# Create and initialize an array variable, way one
			$days = array ("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
			# Display the value in all elements as bulleted list
			foreach ($days as $value) {echo "<ul><li>$value</li></ul>";}
			
			# Create and initialize an array variable, way two
			$days[0] = "Monday";
			$days[1] = "Tuesday";
			$days[2] = "Wednesday";
			$days[3] = "Thursday";
			$days[4] = "Friday";
			$days[5] = "Saturday";
			$days[6] = "Sunday";
			# Display the value in all elements as bulleted list
			foreach ($days as $value) {echo "<ul><li>$value</li></ul>";}
		?>
		<?php
			# Create an array with your information organised
			$ediTemp = array (
				"summer" => array(
					"hottestMonths" => "July and August",
					"averageLow" => "52ºF or 11ºC",
					"averageHigh" => "66ºF or 19ºC"
				),
				"winter" => array (
					"coldestMonths" => "July and August",
					"averageLow" => "33.8ºF or 1ºC",
					"averageHigh" => "44.6ºF or 7ºC"
				),
			);
			#Display for summer
			echo "The hottest months in Edinburgh are ";
			echo $ediTemp['summer']['hottestMonths'];
			echo " when the average low temperatures are ";
			echo $ediTemp['summer']['averageLow'];
			echo " and the average high temperatures are ";
			echo $ediTemp['summer']['averageHigh'];
			echo ".<br>";
			# Display for winter
			echo "The coldest months in Edinburgh are ";
			echo $ediTemp['winter']['coldestMonths'];
			echo " when the average low temperatures are ";
			echo $ediTemp['winter']['averageLow'];
			echo " and the average high temperatures are ";
			echo $ediTemp['winter']['averageHigh'];
			echo ".<br>";
		?>
		<?php
			# Create the multi-dimentional array
			$marks = array (
				"Aarron" => array (
					"Physics" => '74%',
					"English" => '69%',
					"Maths" => '70%'
				),
				"Jamie" => array (
					"Physics" => '64%',
					"English" => '79%',
					"Maths" => '69%'
				),
				"Harry" => array (
					"Physics" => '64%',
					"English" => '79%',
					"Maths" => '69%'
				)
			);
			# Display for Aarron
			echo "Aarron's Marks are ";
			echo $marks['Aarron']['Physics'];
			echo " on Physics, ";
			echo $marks['Aarron']['English'];
			echo " on English and ";
			echo $marks['Aarron']['Maths'];
			echo " on Maths.<br>";

			#Display for Jamie
			echo "Jamies' Marks are ";
			echo $marks[Jamie][Physics];
			echo " on Physics, ";
			echo $marks[Jamie][English];
			echo " on English and ";
			echo $marks[Jamie][Maths];
			echo " on Maths.<br>";

			#Display for Harry
			echo "Harry's Marks are ";
			echo $marks[Harry][Physics];
			echo " on Physics, ";
			echo $marks[Harry][English];
			echo " on English and ";
			echo $marks[Harry][Maths];
			echo " on Maths.";
		?>
		<?php # ARITHMETIC OPERATORS
			echo '<h1>Arithmetic Operators</h1>';
			# Create the variables
			$a = 10;
			$b = 20;
			$c = 41.71;
			$d = 21.21;
			# echo the sum
			echo 'Addition '.$a.' + '.$b.' = ';
			echo $a+$b;
			# echo the substraction
			echo '<br>Substraction '.$d.' - '.$e.' = ';
			echo $d-$e;
			# echo the multiplication
			echo '<br>Multiplication '.$c.' * '.$a.' = ';
			echo $c*$a;
			# echo increment
			echo '<br>Increment ++'.$a.' = ';
			echo ++$a;
			# echo decrement
			echo '<br>Increment --'.$b.' = ';
			echo --$b;
		?>
		<?php # LOGIC OPERATORS
			echo '<h1>Logic Operators</h1>';
			# Create boolean variables
			$a = true;
			$b = false;
			# And --> Evaluate 2 operands and return true if BOTH operands are true
			$and = ($a and $a)? "true" : "false";
			$result = "a AND a - $and <br>";
			echo ($result);
			# &&
			$And = ($a && $a)? "true" : "false";
			$result = "a && a- $And <br>";
			echo ($result);
			# Or --> Evaluate 2 operands and return true if EITHER of them is true (false if NEITHER is)
			$or = ($a or $a)? "true" : "false";
			$result = "a OR a - $or <br>";
			echo ($result);
			# || 
			$Or = ($a || $a)? "true" : "false";
			$result = "a || a - $Or <br>";
			echo ($result);
			# NOT ! --> Before a single operand. It returns true if the given value is FALSE
			$not = (!$a)? "true" : "false";
			$result = "NOT a - $not <br>";
			echo ($result);
			# XOR --> Evaluate two operands and return true if EITHER of them returns true, but NOT IF BOTH do 
			$xor = ($a xor $a)? "true" : "false";
			$result = "a XOR a - $xor<br>";
			echo ($result);
		?>
		<?php
			$a = true;
			$b = false;
			# Test both operands for true:
				echo '<h3>Test both operands for true: AND</h3>';
				$test1 = ($a && $a)? "true" : "false";
				$result = "Test 1 - $test1 <br>";
				echo ($result);
				$test2 = ($a && $b)? "true" : "false";
				$result = "Test 2 - $test2 <br>";
				echo ($result);
				$test3 = ($b && $b)? "true" : "false";
				$result = "Test 3 - $test3 <br>";
				echo ($result);
			# Test either operands for true:
				echo '<h3>Test either operand for true: OR</h3>';
				$test4 = ($a || $a)? "true" : "false";
				$result = "Test 4 - $test4 <br>";
				echo ($result);
				$test5 = ($a || $b)? "true" : "false";
				$result = "Test 5 - $test5 <br>";
				echo ($result);
				$test6 = ($b || $b)? "true" : "false";
				$result = "Test 6 - $test6 <br>";
				echo ($result);
			# Invert values
				echo '<h3>Invert values: !</h3>';
				$test7 = (!$a)? "true" : "false";
				$result = "Test 7 - $test7 <br>";
				echo ($result);
				$test8 = (!$b)? "true" : "false";
				$result = "Test 8 - $test8 <br>";
				echo ($result);
			# Test for a single operands is true
				echo '<h3>Test for a single operands is true: XOR</h3>';
				$test9 = ($a xor $a)? "true" : "false";
				$result = "Test 9 - $test9 <br>";
				echo ($result);
				$test10 = ($a xor $b)? "true" : "false";
				$result = "Test 10 - $test10 <br>";
				echo ($result);
				$test11 = ($b xor $b)? "true" : "false";
				$result = "Test 11 - $test11 <br>";
				echo ($result);
		?>
		<?php
			echo '<h1>Assignment</h1>';
			# Assignments
			/*
			a = b: turns a into b
			a += b: is the same as a = a + b
			a .= b: is the same as a = ab
			so if a = 1 and b =2, 
			a += b = 3
			a .= b = 12
			*/
			#String assignment
			echo '<h3>String Assignment</h3>';
			$a = "Nieves ";
			$aa = "Mena Couso";
			$a.=$aa;
			$result = "\$a and \$aa assigned string: $a";
			echo($result);
			#Integer assignment with addition
			echo '<h3>Integer Assignment with Addition</h3>';
			$b = 4;
			$bb = 6;
			$b +=$bb;
			$result = "\$b and \$bb assigned integer: $b";
			echo($result);
			#Integer assignment with substraction
			echo '<h3>Integer Assignment with Substraction</h3>';
			$c = 7.5;
			$cc = 2.25;
			$c -=$cc;
			$result = "\$c and \$cc assigned integer: $c";
			echo($result);
			#Integer assignment with multiplication
			echo '<h3>Integer Assignment with Multiplication</h3>';
			$d = 9;
			$dd = 5;
			$d *=$dd;
			$result = "\$d and \$dd assigned integer: $d";
			echo($result);
			#Integer assignment with division
			echo '<h3>Integer Assignment with Division</h3>';
			$e = 12;
			$ee = 4;
			$e /=$ee;
			$result = "\$e and \$ee assigned integer: $e";
			echo($result);
		?>
		<?php
			echo '<h1>Comparison Operators</h1>';
			# Test numbers for inequality
			$a = 3;
			$b = 5;
			$equal1 = ($a == $a)? "true" : "false";
			$equal2 = ($a == $b)? "true" : "false";
			$equal3 = ($b == $b)? "true" : "false";
			echo($equal1);
			echo '<br>';
			echo($equal2);
			echo '<br>';
			echo($equal3);
			echo '<br>';
			# Test string for equality
			$usera = ("Sharon" == "Sharon")? "true" : "false";
			echo($usera);
			echo '<br>';
			$userb = ("Sharon" == "Nieves")? "true" : "false";
			echo($userb);
			echo '<br>';
			$userc = ("Nieves" == "Nieves")? "true" : "false";
			echo($userc);
			echo '<br>';
			# Test if numbers are grater than
			$a = 3;
			$b = 15;
			$grater1 = ($a > $b)? "true" : "false";
			echo($grater1);
			echo '<br>';
			$grater2 = ($b > $a)? "true" : "false";
			echo($grater2);
			echo '<br>';
			# Test if numbers are less than
			$less1 = ($a < $b)? "true" : "false";
			echo($less1);
			echo '<br>';
			$less2 = ($b < $a)? "true" : "false";
			echo($less2);
		?>
	</body>
</html>
