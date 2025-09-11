<div id="titre">
    <h1>MAGIC THE GATHERING</h1>
    <button id="fr-en">Français<hr>English</button>
    <button id="jour-nuit">Jour<hr>Nuit</button>
    <nav>
        <a href="/Magic"<?php if (basename(getcwd()) == "Magic") echo "class=\"isActive\"" ?>>Accueil</a>
        <a href="/Magic/Formats"<?php if (basename(getcwd()) == "Formats") echo "class=\"isActive\"" ?>>Formats</a>
        <a href="/Magic/Cartes"<?php if (basename(getcwd()) == "Cartes") echo "class=\"isActive\"" ?>>Cartes</a>
        <a href="/Magic/Compte"<?php if (basename(getcwd()) == "Compte") echo "class=\"isActive\"" ?>>Compte</a>
    </nav>
</div>