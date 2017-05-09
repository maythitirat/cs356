<!--Name: Thitirat Thongthaew 5709612120-->
<!DOCTYPE html>
<html>
  <head>
    <title>Chat!</title>
    <link href="chat.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div>
      <!-- Populate this with messages from chat.txt! -->

<?php
//define variables and set to empty values
$name = $message = $msg =" ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $myFile = "chat.txt";
  $name = test_input($_POST["name"]);
  $message = test_input($_POST["email"]);
  // $msg = $name.":".$message."\r\n";
  if (file_exists($myFile)) {
  $fh = fopen($myFile, 'a');
  } else {
    $fh = fopen($myFile, 'w');
  } 
  fwrite($fh, $name.":".$message."\r\n");
  fclose($fh);

  $handle = fopen("chat.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
      echo $line."<br>";
    }

    fclose($handle);
} else {
    // error opening the file.
} 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>

</div>
       <!-- Fill me in! -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Message: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">  

    </form>
  </body>
</html>
