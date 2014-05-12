<?php
header('content-type: application/xml');
include 'wszystko.php';
?>
<?xml version="1.0" encoding="UTF8" ?>
<baza>
<?php
$ludzieZap=mysql_query("select * from ludzie");
while($ludzie=mysql_fetch_array($ludzieZap))
{
	//print_r($ludzie1);
	echo '<ludzie id="'.$ludzie['id'].'" imie="'.$ludzie['imie'].'" nazwisko="'.$ludzie['nazwisko'].'" typ="'.$ludzie['typ'].'" klasa="'.$ludzie['klasa'].'" />';
}
$laptopyZap=mysql_query("select * from laptopy");
while($laptopy=mysql_fetch_array($laptopyZap))
{
	//print_r($ludzie1);
	echo '<laptopy id="'.$laptopy['id'].'" nazwa="'.$laptopy['nazwa'].'" />';
}
if(isset($_GET['od']))
$wypZap=mysql_query("select * from wyp");
else
$wypZap=mysql_query("select * from wyp where data_koniec=0");
while($wyp=mysql_fetch_array($wypZap))
{
	//print_r($ludzie1);
	echo '<wyp id="'.$wyp['id'].'" id_laptop="'.$wyp['id_laptop'].'" id_czlowiek="'.$wyp['id_czlowiek'].'" data_start="'.$wyp['data_start'].'" data_koniec="'.$wyp['data_koniec'].'" />';
}
?>
</baza>