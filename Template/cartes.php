<p id="intro">Voici les cartes entrées par nos utilisateurs : </p>
<div class="text-box" id="cartes">
    <?php
        $user = 'root';
        $pass = '';
        $db = 'projet';

        $db = new mysqli('localhost', $user, $pass, $db) or die("Erreur lors de la connexion");

        $res = $db->query("SELECT login,nom,image FROM utilisateur INNER JOIN carte ON utilisateur.id = carte.user_id");

        while($row = $res->fetch_assoc()) {
            echo "<div class='card-type'>";
            echo "<img class='card' src='".$row['image']."' alt='".$row['nom']."'>";
            echo "<div class='card-desc'>";
            echo "<p class='titre-paragraphe'>".$row['nom']."</p>";
            echo "<p>Publié par ".$row['login']."</p>";
            echo "</div></div><hr>";
        }
    ?>
</div>