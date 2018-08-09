<?php
$name = $_POST[‘name’];
$email = $_POST[’email’];
$fp = fopen(”formdata.txt”, “a”);
$savestring = $name . “,” . $email . “n”;
fwrite($fp, $savestring);
fclose($fp);
echo “<h1>SUCESS! UPDATING DETAILS. THIS CAN TAKE 1-5 MINTUES</h1>”;
?>
