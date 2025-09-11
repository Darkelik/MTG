<?php
    session_start();
    include("../Template/debut.php");
    include("../Template/nav.php");
    if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true){
        include("../Template/compte2.php");
    } else {
        include("../Template/compte.php");
    }
    include("../Template/fin.php");
?>