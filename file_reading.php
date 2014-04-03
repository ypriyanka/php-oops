<?php
ini_set("display_errors",1);
$f=fopen("pataka.txt","r+") or die('read');
while(!feof($f))
{
	echo fgets($f);  //to read file line by line
}
fclose($f);

$f=fopen("pataka.txt","r+") or die('read');
while(!feof($f))
{
	echo "<br>".fgetc($f)."<br>";  //to read file character by character
}
fclose($f);
?>
