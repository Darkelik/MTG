<?php

    session_start();
    $user = 'root';
    $pass = '';
    $db = 'projet';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Erreur lors de la connexion");

    $id = $_SESSION['id'];
    $nom = $_POST['nom'];
    $image = $_POST['image'];

    $stmt = $db->prepare("INSERT INTO carte VALUES (?,?,?)");
    $stmt->bind_param("iss",$id,$nom,$image);

    try{
        $stmt->execute();
        header("Location: ../Compte/?depot=success");
        $stmt->close();
    } catch(Exception $e){
        header("Location: ../Compte/?depot=failure");
        $stmt->close();
    }

?>