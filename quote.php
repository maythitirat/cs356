<!--Name: Thitirat Thongthaew-->
<!--ID: 5709612120-->
<!DOCTYPE HTML>  
<html>
<head>
	<link rel="stylesheet" type="text/css" href="quotephp.css">
</head>
<body>  
<form action="quote.html">
    <input type="submit" value="BACK">
</form>


<div id="outPopup">
<?php
  $name = "";

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["n"];
  $myfile = file("quotes.txt");
  $size = count($myfile);
  if ($name == 0) {
  	$rand = rand(0,($size-1));
      echo "<img src='trump.png'style='width:70px; height:70px;' />";
      echo " : $myfile[$rand] <br><br>";
  }

  for ($x = 0; $x < $name; $x++) {
    $rand = rand(0,($size-1));
      
      echo "The quote ".($x+1)." : $myfile[$rand] <br><br>";
  } 
  }
?>
</div>

</body>
</html>