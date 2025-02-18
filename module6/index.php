<?php
//fopen
$my_file = fopen("file1.text","w");

    //content
//fclose
fclose($my_file);

$filename = "ds.txt";

$file = fopen($filename, "r");

$size = filesize($filename);

$my_filedata = fread($file, $size);
echo $my_filedata . "<br>";

fclose($file);

//feof - end of line

$my_file = fopen("example.txt", "r");

while(!feof($my_file)){
    echo fgets($my_file) . "<br>";
}

//fwrite
$my_file = fopen("example.txt","w");
$text = "helloooo";
fwrite($my_file, $text);

//w+ (read and write)

$my_file = fopen ("data.txt","w+");

fwrite($my_file, "Data test1");

//a+

$my_file = fopen ("data.txt","a+");

fwrite($my_file, " Data test 2");
?>