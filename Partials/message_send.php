<?php

    
    $req = $bdd->prepare(" SELECT * FROM users WHERE nickname=? "); 
    $users = $req-> fetchAll();
    

    if (isset($_POST['nickname']) && isset($_POST['message'])){


        $nickname = $_POST['nickname'];
        $req->execute(array($nickname)); 
        $users = $req-> fetch();
        date_default_timezone_set('Europe/Paris');
        $created_at = date('Y_m_d h:i:s');
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $color = NULL;

        if (!empty($users) || $nickname == $users['nickname']){

        } else{
            //Requete table users new user
            $req =  $bdd->prepare(" INSERT INTO users (nickname, created_at, ip_address, color ) 
                                   VALUES (?,?,?,?)");
            $bdd->exec("INSERT INTO users (nickname, created_at, ip_address, color)
                        VALUES('".$nickname."', '".$created_at."','".$ip_address."','". $color ."') ");
        }
        
        //recup id d'un users existant

        $req = $bdd->query(" SELECT * FROM users WHERE nickname= '".$_POST['nickname']."' "); 
        $users = $req->fetch();  
        $user_id = $users['id'];
        $message = $_POST['message'];

            //Requete table messages
            $req =  $bdd->prepare(" INSERT INTO messages (user_id, message, ip_address, created_at ) 
            VALUES (?,?,?,?)");

        $bdd->exec("INSERT INTO messages(user_id, message, ip_address, created_at)
                    VALUES('".$user_id."', '".$message."','".$ip_address."', '".$created_at."') ");
    
        }
?>