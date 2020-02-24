<?php 
session_start();
include('../controller/OrderController.php');
// include('../model/Commande.class.php');

if(isset($_SESSION['user']) && $_SESSION['user'] == 'Admin') : ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Démo Hallogalette</title>
</head>

<body>

    <header>
            <p>Bonjour <?= $_SESSION['user'] ?></p>
            <button><a href="../paris/logout.php">logout</a></button>
    </header>

    <main>
    <h1>Vous consultez la commande n° <?=$_GET['id'] ?></h1>
        <table>
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse mail</th>
                <th>Téléphone</th>
                <th>Addresse postale</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Type de galette</th>
                <th>Boisson</th>
                <th>Instructions supplémentaires</th>
            </thead>
            <tbody>
                    <tr>
                        <td><?= $orderSingle['id_order'] ?></td>
                        <td><?= $orderSingle['nom_client'] ?></td>
                        <td><?= $orderSingle['prenom_client'] ?></td>
                        <td><?= $orderSingle['mail_client'] ?></td>
                        <td><?= $orderSingle['tel_client'] ?></td>
                        <td><?= $orderSingle['addresse'] ?></td>
                        <td><?= $orderSingle['city'] ?></td>
                        <td><?= $orderSingle['zip'] ?></td>
                        <td><?= $orderSingle['galette'] ?></td>
                        <td><?= $orderSingle['boisson_qtt'].' '. $orderSingle['boisson_nom'] ?>  </td>
                        <td><?= $orderSingle['instr_commande'] ?></td>
                    </tr>
            </tbody>
        </table>

    </main>

    <footer>

    </footer>

</body>
<?php else : 
header('Location: admin.php');
exit(); ?>

<?php endif ?>
</html>