<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../model/UserModel.class.php';

//Instancier la DB

$userModel = new UserModel();
$user = $userModel->getUserList();
if(count($user) > 0) {

$user_arr['data'] = array();

foreach ($user as $key => $tableau) {
    $user_item = array(
        'id' => $tableau['id'],
        'nom' => $tableau['nom'],
        'prenom' => $tableau['prenom'],
        'company' => $tableau['company'],
        'mail' => $tableau['email'],
        'time_request' => $tableau['time_request']
        );
    array_push($user_arr['data'], $user_item);
    }
echo json_encode($user_arr['data']);
} else {
    echo ('No users found');
}

?>