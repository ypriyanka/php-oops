<?php
$f=fopen("pataka.txt","a+");
$data="hi this is the text i am writing into this file";
$handle=file_put_contents("pataka.txt",$data);
var_dump($handle);
?>