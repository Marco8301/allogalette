<?php 
session_start();
// include('../model/Commande.class.php');
// include('../model/Commande.class.php');
include('../controller/UserController.php');

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
    <h1>Vous consultez l'utilisateur n° <?=$_GET['id'] ?></h1>
        <table>
            <thead>
            <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse mail</th>
                    <th>Société</th>
                    <th>Date de demande</th>
            </thead>
            <tbody>
                    <tr>
                        <td><?= $userSingle['id'] ?></td>
                        <td><?= $userSingle['prenom'] ?></td>
                        <td><?= $userSingle['nom'] ?></td>
                        <td><?= $userSingle['company'] ?></td>
                        <td><?= $userSingle['time_request'] ?></td>
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