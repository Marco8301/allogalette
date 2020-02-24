<?php

if(isset($_POST['pass']) && $_POST['pass'] == "salutparis") {
    session_start();
    $_SESSION['sessionOK'] = "vous êtes autorisés à accéder à la partie privée paris";
    $_SESSION['user'] = 'user';
    header('Location: paris/planning.php');
    exit();
} else {
    header('Location: index.php?err=Mauvais mot de passe !');
    exit();
}


?>