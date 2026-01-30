<?php
session_start(); // kanbdaw session bash nqdro nkhdmo eliha
session_unset(); // kanmseho les variables li kayna f session
session_destroy(); // Hna anmseho session kamla
header("Location: Login.php"); // u hna redirect l login
exit();
?>
<link rel="stylesheet" href="Realisation.css">