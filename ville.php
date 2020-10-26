<?php
$villechoisie = $_POST['ville'];
?>
<!-- Formulaire  -->
<form  method="POST";>
<select name = "ville">
<option value=""></option>
<option value = "paris">paris</option>
<option value = "madrid">madrid</option>
<option value = "lisbonne">lisbonne</option>
</select>

<input type ="submit"></input>
</form>

<?php
switch($villechoisie){
    case "paris":
    echo $villechoisie. "est la capitale de la france";
    break;
    case "madrid":
    echo $villechoisie. "est la capitale de l'espagne";
    break;
    case "lisbonne":
    echo $villechoisie. "est la capitale du Portugal";
    break;}

