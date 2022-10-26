<?php
//fichier des fonction sql
//appel de la connexion a la base de donnée
require 'db.php';

function readAll()
{
    //connexion a la base de donnée
    $pdo = db_connect();

    $query = 'SELECT * FROM user_details';
    $request = $pdo->query($query);
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function readOne($id)
{
    //connexion a la base de donnée
    $pdo = db_connect();

    $queryid = 'SELECT * FROM user_details where user_id = :id';
    $requestid = $pdo->prepare($queryid); 
    $requestid->bindParam(':id', $id);
    $requestid->execute();
    $result = $requestid->fetch();
    return($result);
}

function create(string $pseudo, string $nom, string $prenom, string $mdp, string $genre)
{
    //connexion a la base de donnée
    $pdo = db_connect();

    //requet sql d'ajout dans la base
    $querycreate = "INSERT INTO user_details (username, first_name, last_name, gender, password, status) VALUES (:pseudo, :prenom, :nom, :genre, :mdp, '1')";
    $requestcreate = $pdo->prepare($querycreate);
    $requestcreate->execute(array(':pseudo' => $pseudo, ':prenom' => $prenom, ':nom' => $nom, ':genre' => $genre, ':mdp' => $mdp));
}

function deleteOne(int $id)
{
    //Je me connecte à  la db
    $pdo = db_connect();
    $querydelete = "DELETE FROM user_details WHERE user_id = $id";
    $requestdelete = $pdo->prepare($querydelete);
    $requestdelete->execute();
}
?>