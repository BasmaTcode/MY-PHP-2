<?php
session_start(); // Session katkhali les donnees mkhaznin bayn les pages u kan3lmu bli ankhdmu sessions

if (!empty($_POST['pseudo'])) { // Hna kanshufu wash user eamar pseudo wla lae
    $_SESSION['pseudo'] = $_POST['pseudo']; // Hna kanjibu pseudo u kankhaznuh f session
    header("Location:Dashboard.php"); // Hadi kateaml redirect l page dial dashbord (min luser ydeaml login nishan ymshi n page dashbord)
    exit(); // Hna kanwaqfo lcode mn more redirect
} else {
    echo "Pseudo obligatoire"; // Hna ida kan pseudo khawi kitlae had msg
}
?>
<link rel="stylesheet" href="Realisation.css">