<?php

function getUrlEnd() {
    $urlComplete = $_SERVER["REQUEST_URI"];
    $urlSplit = explode("/",$urlComplete);
    $urlEnd = end($urlSplit);
    $urlTitle = reset(explode(".", $urlEnd));
    $urlTitleMaj = ucwords($urlTitle);
    echo($urlTitleMaj);
}

?>