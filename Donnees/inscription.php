<?php 

    $user = 'root';
    $pass = '';
    $db = 'projet';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Erreur lors de la connexion");

    $login = $_POST['name'];
    $password = $_POST['pwd'];

    $stmt = $db->prepare("INSERT INTO utilisateur(login,password) VALUES (?,?)");
    $stmt->bind_param("ss",$login,$password);

    try{
        $stmt->execute();
        header("Location: ../Compte/?inscription=success");
        $stmt->close();
    } catch(Exception $e){
        header("Location: ../Compte/?inscription=failure");
        $stmt->close();
    }
?>