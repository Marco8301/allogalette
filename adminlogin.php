<?php


if(isset($_POST['adminsubmitlogin']) && $_POST['adminlogin'] == 'admin' && $_POST['adminpass'] == 'admin' ) {
    session_start();
    $_SESSION['user'] = 'Admin';
    header('Location: admin/dashboard.php');
    exit();
} else {
    header('Location: admin/admin.php?err=mauvais mot de passe');
    exit();
}

?>