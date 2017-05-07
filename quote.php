<!DOCTYPE HTML>  
<html>
<head>
	<link rel="stylesheet" type="text/css" href="quotephp.css">
</head>
<body>  

<div id="outPopup">
<?php
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["n"];
  $myfile = file("quotes.txt");
  $size = count($myfile);

  for ($x = 0; $x < $name; $x++) {
    $rand = rand(0,($size-1));
      
      echo "The quote is ".($x+1)." : $myfile[$rand] <br>";
  } 
  }
?>
<form action="quote.html">
    <input type="submit" value="BACK">
</form>
</div>

</body>
</html>