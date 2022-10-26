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
?>