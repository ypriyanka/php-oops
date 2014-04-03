<?php
$f=fopen("pataka.txt","r+");

while(!feof($f))
{
	echo fgetc($f)."<br>";  //to read file character by character
}

fclose($f);
?>