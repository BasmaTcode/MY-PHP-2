<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="POST" action="">
    <label>Nom :</label>
    <input type="text" name="nom" ><br>

    <label>Email :</label>
    <input type="text" name="email"><br>

    <button type="submit">Envoyer</button>
</form>
</body>
</html>
<?php
$erreurs = [];
$nom = $email = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);

    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if (empty($email)) {
        $erreurs[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'email n'est pas valide.";
    }

    if (empty($erreurs)) {
        echo "<p style='color:green;'>Formulaire envoyé avec succès !</p>";
    }
}
if (!empty($erreurs)) {
    echo "<ul style='color:red;'>";
    foreach ($erreurs as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
?>