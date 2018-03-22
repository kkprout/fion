<?php
echo "prout\r";
$dir = "./";
// Open a directory, and read its contents
if (is_dir($dir)){
   if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
         echo "filename:" . $file . "<br>";
      }
      closedir($dh);
   }
}
echo "index.php file content\r";
echo file_get_contents("index.php"); // get the contents, and echo it out.
?>
