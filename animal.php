<!--Name: Thitirat Thongthaew 5709612120-->
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	URL: <input type="text" name="url"><br><br>
	<input type="submit" name="submit" value="submit"><br><br>
</form>

<?php 
$input = $url = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$input = $_POST["url"];
	if ($input == "kitty") {
		for ($i=1; $i <= 5; $i++) { 
		$image = "images/kitty".$i.".jpeg";
		print"<img src=\"$image\" width=\"200\" height=\"200\"\/>";
			
		}
	}
	elseif ($input == "pony") {
		for ($i=1; $i <= 3; $i++) { 
		$image = "images/pony".$i.".jpeg";
		print"<img src=\"$image\" width=\"200\" height=\"200\"\/>";
		
		}
	}
	elseif ($input == "puppy") {
		for ($i=1; $i <= 5; $i++) { 
		$image = "images/puppy".$i.".jpeg";
		print"<img src=\"$image\" width=\"200\" height=\"200\"\/>";
		
		}
	}


}


?>


</body>
</html>