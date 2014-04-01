<?php
$f=fopen("pataka.txt","r+");
while(!feof($f))
{
	fgets($f);  //to read file line by line
}
echo'<br>';

while(!feof($f))
{
	fgetc($f);  //to read file character by character
}

fclose($f);
?>