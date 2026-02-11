<?php

$file = "mode_test.txt";


$h = fopen($file, "r");
fclose($h);


$h = fopen($file, "w");
fwrite($h, "Write Mode\n");
fclose($h);


$h = fopen($file, "a");
fwrite($h, "Append Mode\n");
fclose($h);


$h = fopen("newfile.txt", "x");
fwrite($h, "Created using x mode\n");
fclose($h);


$h = fopen($file, "r+");
fwrite($h, "r+ Mode\n");
fclose($h);


$h = fopen($file, "w+");
fwrite($h, "w+ Mode\n");
fclose($h);


$h = fopen($file, "a+");
fwrite($h, "a+ Mode\n");
fclose($h);


$h = fopen("another_newfile.txt", "x+");
fwrite($h, "x+ Mode\n");
fclose($h);
echo "All File Modes Executed Successfully!";

?>