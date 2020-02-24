<?php

class UserModel {

    public function addUserToDb($nom, $prenom, $company, $mail) {
        include('PDO.class.php');

        $request = 'INSERT INTO users (prenom, nom, company, email, time_request)
        VALUES (:prenom, :nom, :company, :email, NOW())';

        $user = $db->prepare($request);
        $user->execute([
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':company' => $company,
            ':email' => $mail
        ]);
    }

    public function getUserList() {
        include('PDO.class.php');
        $request = 'SELECT * from users';
        $user = $db->prepare($request);
        $user->execute();
        $displaylist = $user->fetchAll(PDO::FETCH_ASSOC);
        return $displaylist;
    }

    public function getSingleUser($id) {
        include('PDO.class.php');
        $request = 'SELECT * from users WHERE id =' . $id;
        $singleUser = $db->prepare($request);
        $singleUser->execute();
        $displaySingle = $singleUser->fetch(PDO::FETCH_ASSOC);    
        return $displaySingle;
    }

}


?>


