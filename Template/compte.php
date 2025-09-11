<?php
    if (isset($_GET['inscription'])){
        if ($_GET['inscription'] == "success"){
            echo "<p id=\"intro\">Votre compte a été créé avec succès.</p>";
        } elseif ($_GET['inscription'] == "failure"){
            echo "<p id=\"intro\">ERREUR : Login déjà utilisé.</p>";
        }
    }
    if (isset($_GET['connexion'])){
        if ($_GET['connexion'] == "failure"){
            echo "<p id=\"intro\">ERREUR : Mauvais login ou mot de passe.</p>";
        }
    }
?>

<div class="forms">
    <form action="../Donnees/connexion.php" method="POST">
        <label class="desc">Se connecter</label><br><br>
        <label for="login">Votre login</label><br>
        <input type="text" id="login" name="login" placeholder="Dupont" required><br>
        <label for="mdp">Votre mot de passe</label><br>
        <input type="password" id="mdp" name="mdp" placeholder="1234" required><br>
        <input type="submit" value="Connexion">
    </form>
    <span class="bar"></span>
    <form action="../Donnees/inscription.php" method="POST">
        <label class="desc">S'inscrire</label><br><br>
        <label for="name">Votre login</label><br>
        <input type="text" id="name" name="name" placeholder="Dupont" required><br>
        <label for="pwd">Votre mot de passe</label><br>
        <input type="password" id="pwd" name="pwd" placeholder="1234" required><br>
        <input type="checkbox" id="accept" required><label for="accept">J'accepte les conditions</label><br>
        <input type="submit" value="Inscription">
    </form>
</div>