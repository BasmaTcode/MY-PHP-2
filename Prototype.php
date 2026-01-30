<form action="" method="POST">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>

    <input type="submit" name="submit" value="Envoyer">
</form>
<?php
if (isset($_POST['submit'])) { // Hna wash user brek ela envoyer

    // Hna anjibu l values mn lform
    $nom = trim($_POST['nom']);       
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Hna ankhazno errors f array
    $errors = [];

    // Ancheckiw le nom
    if (empty($nom)) {
        $errors[] = "Le nom est requis."; // Ida kan le nom khawi anzidu had erreur f array
    }

    // Antcheckiw email
    if (empty($email)) {
        $errors[] = "L'email est requis."; // Nfss shi erreur akhur anziduh f array
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide."; // w hna ida kan email mashi valide hta hua anziduh f array
    }

    // Antcheckiw message
    if (empty($message)) {
        $errors[] = "Le message est requis."; // Same hna ida message khawi
    }

    // العرض الشرطي
    if (!empty($errors)) { // hna ida array fiha akhta2
        echo "<ul style='color:red;'>"; // anbdaw neardohom f wahd list 
        foreach ($errors as $error) { // aneamlu loop eala kul erreur  f array ( loop kadur ela kula element f array)
            echo "<li>$error</li>"; // hna an3red kula errur f liste
        }
        echo "</ul>"; 
    } else {
        echo "<p style='color:green;'>Merci $nom, votre message a été envoyé avec succès !</p>"; // ida makanch akhta2 , message de succes
    }
}
?>


