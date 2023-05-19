<?php

$filename = "task 17.txt"; // name of the file to be opened

// open the file for writing
$file = fopen($filename, "w");

// write some text to the file
fwrite($file, "Hello, world!\n");

// close the file
fclose($file);

// open the file for reading
$file = fopen($filename, "r");

// read the contents of the file
$contents = fread($file, filesize($filename));

// close the file
fclose($file);

// output the contents of the file
echo($contents);

?>