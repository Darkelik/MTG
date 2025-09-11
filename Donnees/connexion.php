<?php
    session_start();
    $user = 'root';
    $pass = '';
    $db = 'projet';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Erreur lors de la connexion");

    $login = $_POST['login'];
    $password = $_POST['mdp'];

    $result = $db->query("SELECT * FROM utilisateur");

    $trouve = false;
    while($row = $result->fetch_assoc()) {
        if ($row["login"] == $login){
            $trouve = true;
            if ($row["password"] == $password){
                $_SESSION["id"] = $row["id"];
                $_SESSION["user"] = $login;
                $_SESSION["logged"] = true;
                header("Location: ../Compte");
                break;
            } else {
                header("Location: ../Compte?connexion=failure");
                break;
            }
        }
    }

    if (!$trouve){
        header("Location: ../Compte?connexion=failure");
    }
    
?>