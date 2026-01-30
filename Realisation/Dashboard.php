<?php
session_start();

if (!isset($_SESSION['pseudo'])) { // Hna ida makansh pseudo f session
    header("Location: Login.php"); // Anrjeoo nishan l page login ma atlaelush dashbord
    exit();
}
?>

<h2>Bienvenue <?= $_SESSION['pseudo']; ?></h2> <!-- Hna ida kan pseudo f session atlae f page had text -->
<a href="logout.php">Déconnexion</a> <!-- Hadi mni ybrek ela deconnexion kidih l logout-->
<link rel="stylesheet" href="Realisation.css">