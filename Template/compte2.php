<?php
    if (isset($_GET['depot'])){
        if ($_GET['depot'] == "success"){
            echo "<p id=\"intro\">Votre carte a été déposée avec succès.</p>";
        } elseif ($_GET['depot'] == "failure"){
            echo "<p id=\"intro\">Erreur lors du dépot de la carte.</p>";
        }
    }
?>

<div class="forms">
    <form action="../Donnees/deconnexion.php" method="POST">
        <label class="desc">Bienvenue <?php echo $_SESSION["user"] ?>!</label><br><br>
        <input type="submit" value="Déconnexion">
    </form>
</div>
<div class="forms">
    <form action="../Donnees/deposer.php" method="POST">
        <label class="desc">Déposez une carte !</label><br><br>
        <label for="nom">Nom de votre carte MTG : </label><br>
        <input type="text" id="nom" name="nom" placeholder="sol ring" required><br>
        <label for="image">L'URL de votre carte MTG : </label><br>
        <input type="test" id="image" name="image" placeholder="https://"><br>
        <input type="submit" value="Déposer">
    </form>
</div>



