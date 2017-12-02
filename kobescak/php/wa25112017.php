<!DOCTYPE HTML>
<html>
		<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Tomislav Kobescak">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- uvoz fonta iz fonts.google.com -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- vanjski css -->
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
<body>
<?php
print '
<form action="wa25112017.php" method="POST">
Varijabla a: <input type="number" name="a"><br>
Varijabla b: <input type="number" name="b"><br>
<input type="submit" value"Pošalji">
</form> ';
$a=$_POST['a'];
$b=$_POST['b'];
$c=(3*$a - $b) / 2;
echo "<br>";
echo "a=" .$_POST['a'] ;
echo "<br>";
echo "b=" .$_POST['b'] ;
echo "<br>";
echo "<hr>";
echo "c=(3*$a - $b) / 2" .$c ;
echo "<br>";

$d=date("H"); 
echo "<br>";
if ($d>="8" && $d<="11") { echo "Dobro jutro"; } 
elseif ($a>=11 && $a<=18) { echo "Dobar dan"; }
elseif($a>=18 && $a<=22){ echo "Dobro vecer!"; }
else { echo "Vrijeme ti je za kreveta!"; }
echo "<br>";
?>
</body>
</html>