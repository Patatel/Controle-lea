<?php
function db_connect() {
    try {
        return $pdo = new PDO('mysql:host=localhost;dbname=samplevideo_db', 'root', '');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
         return die();
    }
}
?>