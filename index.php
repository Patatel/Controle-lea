<?php
//appel des fonction sql
require_once 'crud.php';

$pseudo = $_POST['pseudo'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$genre = $_POST['genre'];

create($pseudo, $nom, $prenom, $mdp, $genre)
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>To Do List</title>
</head>

<body>
    <div class="container">
        <h1>Gestion des utilisateurs</h1>

        <h2>Affiche tout les utilisateurs</h2>
        <?php var_dump(readAll()); ?>

        <h2>Rechercher un utilisateur</h2>
        <?php var_dump(readOne('1')); ?>

        <h2> Ajouter un utilisateur</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label" for="pseudo">Pseudo : </label>
                    <input class="form-control" type="text" name="pseudo">
                </div>
                <div class="form-group">
                    <label class="form-label" for="nom">Nom : </label>
                    <input class="form-control" type="text" name="nom">
                </div>
                <div class="form-group">
                    <label class="form-label" for="prenom">Prénom : </label>
                    <input class="form-control" type="text" name="prenom">
                </div>
                <div class="form-group">
                    <label class="form-label" for="mdp">Mot de passe : </label>
                    <input class="form-control" type="text" name="mdp">
                </div>
                <div class="form-group">
                    <label class="form-label" for="genre">Genre : </label>
                    <input class="form-control" type="text" name="genre">
                </div>
                <br>
                <button class="btn btn-success" type="submit" name="create">Ajouter</button>
            </form>
    </div>
</body>
</html>