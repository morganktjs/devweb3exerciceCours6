<?php
    session_start();
    $nom_cookie = "isConnected";
    $valeur_cookie = "valeur";
    $expiration_cookie_seconde = 3600;
    $path = "/";
    setcookie($nom_cookie,$valeur_cookie,time()+$expiration_cookie_seconde,$path);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Mon site</title>
    </head>
    <body>
        <h2>    
            Exercice
        </h2>
        <form class="needs-validation" method="post" action="/connexion.php" novalidate>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="account">Votre compte</label>
                        <input type="account" class="form-control" id="account" name="account">
                        <div class="invalid-feedback">
                            un nom de compte est requis
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <div class="invalid-feedback">
                            Un mot de passe est requis.
                        </div>
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </body>
</html>