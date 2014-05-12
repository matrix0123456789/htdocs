<?php
include 'wszystko.php';
if(isset($_POST['dodaj']))
{
	$lista=explode(';',$_POST['dodaj']);
	foreach($x in $lista)
	{
		$l=explode('/',$x);
		mysql_query("insert into wyp (`id_laptop`, `id_czlowiek`, `data_start`, `data_koniec`) values ($l[0],$l[1],$l[2],$l[3])");
	}
}if(isset($_POST['oddaj']))
{
	$lista=explode(';',$_POST['oddaj']);
	foreach($x in $lista)
	{
		$l=explode('/',$x);
		mysql_query("update wyp set data_koniec=$l[1] where id=$l[0]");
	}
}
?>