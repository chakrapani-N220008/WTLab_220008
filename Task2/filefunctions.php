<?php
// echo "hi<br/>";

// $filepath="uploads/telugutwitter_meme_0034.jpg";
// if(file_exists($filepath)){
//     $fileRead=fopen($filepath,"r");
//     echo fread($fileRead,filesize($filepath));
//     fclose($fileRead);
// }


// else{
//     echo "no file found";
// }
$filepath="test.txt";
$fileWrite=fopen($filepath,"w");
$fileLength=fwrite($fileWrite,"hi hello welcome");//return file length
echo $fileLength;
echo file_get_contents($filepath);
// file_put_contents($filepath,"/n namaste guruvu garu");//default overwrite
// file_put_contents($filepath,"/n namaste guruvu garu",FILE_APPEND);//APPEND
$lines=file($filepath);//return associative array for each line
print_r($lines);
echo "<br>";
echo filesize($filepath);
echo "<br>";
echo filetype($filepath);//file
echo "<br>";
echo filetype("uploads");//dir
echo "<br>";
echo fileatime($filepath);//last access 
echo "<br>";
echo filemtime($filepath);//last modified
echo "<br>";
echo filectime($filepath);//last created
echo "<br>";
echo fileperms($filepath);//
echo "<br>";
echo fileowner($filepath)."<br>";//1
echo filegroup($filepath)."<br>";//1
echo fileinode($filepath)."<br>";
copy($filepath,"copy.txt");//if file is not there copy.txt it creates copy the data 
rename($filepath,"hello.txt");
unlink("hello.txt");//not give error if file not exists
mkdir("task3");
rmdir("task3");//remove directory not give error if file not exists
echo is_file($filepath);//true or false
echo is_dir("task2");//true or false
echo "<h3>Directory Listing (scandir):</h3>";
print_r(scandir("."));//returns inside file name in the form of Returns indexed array check chatgpt
echo "<h3>Directory Listing (opendir):</h3>";

$dir=opendir(".");
while(($file=readdir($dir))!==false){
    echo $file."<br>";
}
closedir($dir);

echo "<h3>Current Working Directory:</h3>";
echo getcwd()."<br>";
chdir("..");
echo "<br>Changed Directory: " . getcwd();
$filePath="sample.txt";
$handle=fread($filePath,filesize($filePath));
if(flock($handle,LOCK_EX)){
    echo fread($filePath,filesize($filePath))."<br>";
    flock($handle, LOCK_UN);
    fclose($filePath);
}
else {
    echo "not locked properly";
}
?>