<?php
/*Calcule de surface d'un rectangle*/
$largeur = $_POST['largeur'];
$longueur = $_POST['longueur'];

$surface = $largeur * $longueur;

echo $surface;

?>

<form  action = "" method="POST" >
<label for="longueur">longueur</label>
<input type ="number" name="longueur"></input>;
<br> </br>
<label for="largeur">largeur</label>
<input type ="number" name="largeur"></input>;
<br> </br>
<input type ="submit" value ="calcul"></input>

</form>