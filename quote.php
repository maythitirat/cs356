<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
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


<!-- <h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form> -->



</body>
</html>