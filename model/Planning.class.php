<?php

class Planning {

  public function getCreneauxList() {
    include('PDO.class.php');
    $request = 'SELECT * from planning';
    $display = $db->prepare($request);
    $display->execute();
    $displayCreneauxList = $display->fetchAll(PDO::FETCH_ASSOC);
    return $displayCreneauxList;
}

}

?>