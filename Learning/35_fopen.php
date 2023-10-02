<?php
$file = fopen("file.txt","r");
$fi = fread($file , filesize("file.txt"));
echo $fi;
fclose($file);
?>