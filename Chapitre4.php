<?php
setcookie("utilisateur", "Alice", time() + 3600, "/");
echo "Cookie 'utilisateur' créé pour 1 heure.";
if (isset($_COOKIE['utilisateur'])) {
    echo "Bonjour " . $_COOKIE['utilisateur'];
} else {
    echo "Aucun cookie trouvé.";
}
setcookie("utilisateur", "", time() - 3600, "/");
echo "Cookie 'utilisateur' supprimé.";
?>