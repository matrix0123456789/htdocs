<?php
include 'wszystko.php';
?><!doctype>
<html>
<head>
<script>
var dod=new Object();
</script>
<title>Baza laptopów - LO Olesno</title>
</head>
<body>
<div id="dodaj"><ul id="ludzie">
<?php
$ludzieZap=mysql_query("select * from ludzie");
while($ludzie=mysql_fetch_array($ludzieZap))
{
	//print_r($ludzie);
	echo '<li onclick="dod.cz='.$ludzie['id'].';document.getElementById(\'ludzie\')">'.$ludzie['imie'].' '.$ludzie['nazwisko'].'</li>';
}
?>
</ul></div>
</body>
</html>