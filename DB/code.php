<?php
// chemin pour le fichier database

$pdo = new PDO ('sqlite:test.db');

// pour appeler les donnés de la table de programme
$query = $pdo -> query ('SELECT * FROM client');

$data = $query->fetchALL(PDO::FETCH_ASSOC);

?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID<th>
                <th>nom<th>
                <th>email<th>
                <th>numero<th>
                <th>prenom<th>
            </tr>
        </thead>
        <tBody>
        <?php foreach($data as $data): ?>
        <td>#<?=$data['id'] ?></td>
        <td><?= $data['nom'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['numero'] ?></td>
        <td><?= $data['prenom'] ?></td>
    </tr>
<?php endforeach ?>
</TBody>
    </table>
</body>
</html>

     