<?php
$bonjour = 'bonjour'; /*Variable bonjour*/
$nombre = 0; /*Variable nombre qui permet de demander que je veux a partir de 0.*/

for($nombre= 0 ; $nombre<10 ;$nombre++) 
/*$nombre = 0 -- Remet la variable demander
$nombre<10 -- demande que je voudrais le repeter 10 fois passer au dessus de 10 je ne peut pas
$nombre++ -- Operateur d'incrementation et décrémentation Retourne $nombre, puis incrémente $a de 1.*/
{
    echo $bonjour.'<br>'; /*Appelle la variable bonjour*/
}

?>