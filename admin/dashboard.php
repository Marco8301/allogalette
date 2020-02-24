<?php 
session_start();
include('../controller/OrderController.php');
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
        <button><a href="../paris/logout.php">logout</a></button>
        <p>Bonjour <?= $_SESSION['user'] ?></p>
        <button id="btnOrder">Liste des commandes</button>

        <button id="btnUser">Liste des users</button>
    </header>

    <main>


        <section id="tabOrders">
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
                    <?php foreach($orderList as $key => $value) : ?>
                        <tr>
                            <td> <a href="order_single.php?id=<?= $value['id_order'] ?>"> <?= $value['id_order'] ?></a></td>
                            <td><?= $value['nom_client'] ?></td>
                            <td><?= $value['prenom_client'] ?></td>
                            <td><?= $value['mail_client'] ?></td>
                            <td><?= $value['tel_client'] ?></td>
                            <td><?= $value['addresse'] ?></td>
                            <td><?= $value['city'] ?></td>
                            <td><?= $value['zip'] ?></td>
                            <td><?= $value['galette'] ?></td>
                            <td><?= $value['boisson_qtt'].' '. $value['boisson_nom'] ?>  </td>
                            <td><?= $value['instr_commande'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>

        <section id="tabUsers" style="display:none;">
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
                    <?php foreach($userList as $key => $value) : ?>
                        <tr>
                            <td> <a href="user_single.php?id=<?= $value['id'] ?>"> <?= $value['id'] ?></a></td>
                            <td><?= $value['nom'] ?></td>
                            <td><?= $value['prenom'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['company'] ?></td>
                            <td><?= $value['time_request'] ?></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>


    </main>

    <footer>

    </footer>

    <script>
        var btnOrder = document.getElementById('btnOrder');
        var btnUser = document.getElementById('btnUser');
        var tabOrder = document.getElementById('tabOrders');
        var tabUser = document.getElementById('tabUsers');


        btnOrder.addEventListener('click', function(){
            tabOrder.style.display="block";
            tabUser.style.display="none";

        });

        btnUser.addEventListener('click', function(){
            tabOrder.style.display="none";
            tabUser.style.display="block";

        });

        </script>

</body>
<?php else : 
header('Location: admin.php');
exit(); ?>

<?php endif ?>
</html>