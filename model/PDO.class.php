<?php

try {
    $db = new PDO ("mysql:host=localhost; dbname=testhallo; charset=utf8", "root", "root");
}

catch (PDOException $e) {
    echo "erreur mon gars ".$e->getMessage();
}

?>