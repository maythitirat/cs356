<!--Thitirat Thongthaew 5709612120-->
<!DOCTYPE html>
<html>
	<!-- Fibonacci

	Print out the first, say, twenty elements of the Fibonacci sequence:
	0, 1, 1, 2, 3, 5, 8, 13, ...
	Each element is the sum of the previous two given a0 = 0 and a1 = 1.
	
	-->

	<head>
		<title>Fibonacci Sequence</title>
	</head>
	
	<body>
		<h1>The first twenty Fibonacci numbers:</h1>
		<?php
		// define variables and set to empty values
		$n = "";

		if ($_SERVER["REQUEST_METHOD"] == "GET") {
		  $n = $_GET["name"];
		 if ($n < 1 && $n != 0) {
		 	echo "invalid parameter!!";
		 }
		if ($n == 0) {

			$first = 0;
		  $second = 1;
		 
		  echo $first.' <br>'.$second.' <br>';
		 
		  for($i = 2; $i < 10; $i++){
		 
		    $third = $first + $second;
		 
		    echo $third.'<br>';
		 
		    $first = $second;
		    $second = $third;
 
    		}
		
		}
		elseif ($n>=2 && $n<=20) {
			$first = 0;
		  $second = 1;
		 
		  echo $first.'<br> '.$second.'<br> ';
		 
		  for($i = 2; $i < $n; $i++){
		 
		    $third = $first + $second;
		 
		    echo $third.'<br>';
		 
		    $first = $second;
		    $second = $third;
		}
		}
		elseif ($n == 1) {
			echo "0";
		}
		 
		}
	?>


		
	</body>
</html>
