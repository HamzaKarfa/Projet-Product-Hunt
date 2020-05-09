<?php require 'header.php'?>

<main class='container d-flex justify-content-center flex-column pt-5 '>


<div class="row">
    <div class=" col-xl-9 border">
    <h1 class="mb-5 text-center" > Tchat </h1>
                 <?php //Affichage message du tchat
                    include './database_connexion.php'
                ?>  
            <div id="message_div">

            </div>

 
            <form  action="index.php" method='POST' class = "mt-3 ml-3 text-center">
                  <label for="nickname"> Pseudo : </label> 
                  <input type="text" name="nickname" placeholder="Prenom" id="nickname" value ="<?php if (isset($_COOKIE['user_cookie'])){ $_COOKIE['user_cookie']; } ?>" required><br>
                  <label for="message"> Message : </label> 
                  <input type="text" name="message" placeholder="Votre message" id="message" required>
                <section class = "mt-3 ml-3 ">
                  <button class="m-2 btn btn-lg btn-secondary" id = "button">Envoyer</button>
                  <button class="m-2 btn btn-lg btn-secondary " type="reset">Annuler</button>
                </section>
            </form>
            <?php //Envoi message BDD
                include '../Partials/user_cookie.php';
                include '../Partials/message_send.php';
            ?>
    </div>
    <div class=" col-xl-3 border">
          <h4>Liste des utilisateurs</h4>
          <div id="usersList">
          
          </div>
          <hr>

    </div>
</div>

</main>

<?php include 'footer.php'?>


<?php
    function dumpArray(array $nested_arrays): void {
            foreach ($nested_arrays as $key => $value) {
                if (gettype($value) !== 'array') {
                    echo ('<li style="margin-left: 2rem;color: teal; background-color: white">'
                        . '<span style="color : steelblue;font-weight : bold;">'
                        . $key . '</span> : '
                        . $value . '</li>');
                } else {
                    /* ignore same level recursion */
                    if ($nested_arrays !== $value) {
                        echo ('<details><summary style="color : tomato; font-weight : bold;">'
                            . $key . '<span style="color : steelblue;font-weight : 100;"> ('
                            . count($value) . ')</span>'
                            . '</summary><ul style="font-size: 0.75rem; background-color: ghostwhite">');
                        dumpArray($value);
                        echo ('</ul></details>');
                    };
                };
            };
        };
    dumpArray($GLOBALS); 
    ?>