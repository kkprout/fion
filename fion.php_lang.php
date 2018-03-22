<?php
echo "prout";
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
echo file_get_contents("index.php"); // get the contents, and echo it out.
?>
