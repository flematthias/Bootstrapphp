<?php
$chemin ="/bootstrapphp/";
switch ($_SERVER["SCRIPT_NAME"]) {
    case $chemin.'about.php':
        $nomPage = "about";
        $titlePage = "A propos";
        $descriptionPage = "Explication";
        break;
        case $chemin.'portfolio.php':
        $nomPage = "portfolio";
        $titlePage = "Portfolio";
        $descriptionPage = "Explication";
        break;
        case $chemin.'boucle.php':
        $nomPage = "boucle";
        $titlePage = "boucle";
        $descriptionPage = "Explication";
        break;
        case $chemin.'users.php':
        $nomPage = "users";
        $titlePage = "Utilisateurs";
        $descriptionPage = "Explication";
        break;
        case $chemin.'contact.php':
        $nomPage = "contact";
        $titlePage = "Contact";
        $descriptionPage = "Explication";
        break;
    default:
    case $chemin.'index.php':
    $nomPage = "index";
    $titlePage = "Accueil";
    $descriptionPage = "Explication";
}

function monMsg($colorMsg){
    echo"<div style='color:$colorMsg'>
    Je suis ici grâce à une fonction PHP
</div>";
}

?>

