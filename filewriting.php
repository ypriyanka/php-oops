<?php
$f=fopen("pataka.txt","w+");
$data="hi this is the text i am writing into this file";
$handle=fwrite($f,$data);
var_dump($handle);
?>