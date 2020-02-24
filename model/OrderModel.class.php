<?php

class OrderModel {

    public function getCreneauxList() {
        include('PDO.class.php');
        $request = 'SELECT * from planning';
        $display = $db->prepare($request);
        $display->execute();
        $displayCreneauxList = $display->fetchAll(PDO::FETCH_ASSOC);
        return $displayCreneauxList;
    }

    public function placeOrder($idplanning, $nom, $prenom, $mail, $tel, $addresse, $city, $zip, $galette, $boissonqtt, $boissonnom, $instruction) {
        include('PDO.class.php');

        $request = 'INSERT INTO commandes (nom_client, prenom_client, mail_client, tel_client, addresse, city, zip, galette, boisson_qtt, boisson_nom, instr_commande, time_commande)
        VALUES (:nom_client, :prenom_client, :mail_client, :tel_client, :addresse, :city, :zip, :galette, :boisson_qtt, :boisson_nom, :instr_commande, NOW())';

        $order = $db->prepare($request);
        $order->execute([
            ':nom_client' => $nom,
            ':prenom_client' => $prenom,
            ':mail_client' => $mail,
            ':tel_client' => $tel,
            ':addresse' => $addresse,
            ':city' => $city,
            ':zip' => $zip,
            ':galette' => $galette,
            ':boisson_qtt' => $boissonqtt,
            ':boisson_nom' => $boissonnom,
            ':instr_commande' => $instruction
        ]);

        $request2 = 'UPDATE `planning` SET `statut` = "is-selected" WHERE `planning`.`id_planning` = :id_planning;';
        $order2 = $db->prepare($request2);
        $order2->execute([
            ':id_planning' => $idplanning
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


