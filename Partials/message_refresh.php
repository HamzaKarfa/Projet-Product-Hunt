 <?php
/*  Pour XMLhttpRequest
echo '<pre>'.'<ul>';
  echo( 
    '<h5>'.$message['nickname'].' :'.'</h5>'
    .'<li>' .$message['message'].'</li>'
    .'Envoyé à :'.$message['created_at']
  );
}
echo '</ul>'.'</pre>';
*/
include '../app/database_connexion.php';

$req = $bdd->query('SELECT * FROM users
                             INNER JOIN messages
                             WHERE users.id = messages.user_id 
                             ORDER BY messages.created_at DESC
                             LIMIT 6');
                                  
$messages = $req->fetchAll();


  echo json_encode($messages);
?>