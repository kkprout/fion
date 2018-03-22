<?php
// Affiche toutes les informations, comme le ferait INFO_ALL
// phpinfo();
// Affiche uniquement le module d'information.
// phpinfo(8) fournirait les mêmes informations.
// phpinfo(INFO_MODULES);
//Get a list of file paths using the glob function.
$fileList = glob('./');
//Loop through the array that glob returned.
foreach($fileList as $filename){
   //Simply print them out onto the screen.
   echo $filename, '<br>'; 
}
?>
