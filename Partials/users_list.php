
<?php
include '../app/database_connexion.php';

$req = $bdd->query('SELECT * FROM users');

$users = $req->fetchAll();



  echo json_encode($users);

?>