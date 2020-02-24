<?php

class Commande {


  function __construct($idplanning, $nom, $prenom, $mail, $tel, $addresse, $city, $zip, $galette, $boissonqtt, $boissonnom, $instruction) {
    $this->idplanning = $idplanning;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->tel = $tel;
    $this->addresse = $addresse;
    $this->city = $city;
    $this->zip = $zip;
    $this->galette = $galette;
    $this->boissonqtt = $boissonqtt;
    $this->boissonnom = $boissonnom;
    $this->instruction = $instruction;
  }

  function placeOrder() {
    include('PDO.class.php');

    $request = 'INSERT INTO commandes (nom_client, prenom_client, mail_client, tel_client, addresse, city, zip, galette, boisson_qtt, boisson_nom, instr_commande, time_commande)
    VALUES (:nom_client, :prenom_client, :mail_client, :tel_client, :addresse, :city, :zip, :galette, :boisson_qtt, :boisson_nom, :instr_commande, NOW())';

    $order = $db->prepare($request);
    $order->execute([
        ':nom_client' => $this->nom,
        ':prenom_client' => $this->prenom,
        ':mail_client' => $this->mail,
        ':tel_client' => $this->tel,
        ':addresse' => $this->addresse,
        ':city' => $this->city,
        ':zip' => $this->zip,
        ':galette' => $this->galette,
        ':boisson_qtt' => $this->boissonqtt,
        ':boisson_nom' => $this->boissonnom,
        ':instr_commande' => $this->instruction
    ]);

    $request2 = 'UPDATE `planning` SET `statut` = "is-selected" WHERE `planning`.`id_planning` = :id_planning;';
    $order2 = $db->prepare($request2);
    $order2->execute([
        ':id_planning' => $this->idplanning
    ]);
  }

  public function getOrdersList() {
    include('PDO.class.php');
    $request = 'SELECT * from commandes';
    $order = $db->prepare($request);
    $order->execute();
    $displaylist = $order->fetchAll(PDO::FETCH_ASSOC);
    return $displaylist;
}

public function getSingleOrder($id) {
    include('PDO.class.php');
    $request = 'SELECT * from commandes WHERE id_order =' . $id;
    $singleOrder = $db->prepare($request);
    $singleOrder->execute();
    $displaySingle = $singleOrder->fetch(PDO::FETCH_ASSOC);    
    return $displaySingle;
}

}

?>