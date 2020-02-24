<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../model/OrderModel.class.php';

//Instancier la DB

$orderModel = new OrderModel();
$order = $orderModel->getOrdersList();

if(count($order) > 0) {

$order_arr['data'] = array();

foreach ($order as $key => $tableau) {
    $order_item = array(
        'id' => $tableau['id_order'],
        'nom_client' => $tableau['nom_client'],
        'prenom_client' => $tableau['prenom_client'],
        'mail_client' => $tableau['mail_client'],
        'tel_client' => $tableau['tel_client'],
        'addresse' => $tableau['addresse'],
        'city' => $tableau['city'],
        'zip' => $tableau['zip'],
        'galette' => $tableau['galette'],
        'boisson_qtt' => $tableau['boisson_qtt'],
        'boisson_nom' => $tableau['boisson_nom'],
        'instr_commande' => $tableau['instr_commande'],
        'time_commande' => $tableau['time_commande'],
        );
    array_push($order_arr['data'], $order_item);
    }
echo json_encode($order_arr['data']);
 
} else {
    echo ('No orders found');
}

?>