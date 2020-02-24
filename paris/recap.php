<?php 
session_start();
include('../utilities/functions.php');

include('../controller/OrderController.php');
if(isset($_SESSION['sessionOK']) && isset($_SESSION['user'])) : ?>


<?php

include('../utilities/header.php')
?>

    <main>
        <section id="bandeau-img">
            <h1>Que des galettes, pas de saucisses !</h1>
            <div></div>
        </section>
        <form id="formu2" action="../controller/OrderController.php" method="post">
        <input type="hidden" name="date" value="<?= $_GET['date'] ?>">
        <input type="hidden" name="heure" value="<?= $_GET['heure'] ?>">
        <input type="hidden" name="idplanning" value="<?= $_GET['idplanning'] ?>">

            <!-- <fieldset>
                <p>Vous souhaitez être livré le créneau du <?= $_GET['date'] ?> à <?= $_GET['heure'] ?></p>
                <legend>Informations de contact</legend>
                    <p>
                        <label for="nomclient">Votre nom :</label>
                        <input type="text" name="nomclient" id="nomclient" value="<?= $_GET['nomclient']?>" required>
                    </p>

                    <p>
                        <label for="prénomclient">Votre prénom :</label>
                        <input type="text" name="prénomclient" id="prénomclient" value="<?= $_GET['prénomclient']?>" required>
                    </p>

                    <p>
                        <label for="mailclient">Votre adresse mail :</label>
                        <input type="email" name="mailclient" id="mailclient" value="<?= $_GET['mailclient']?>" required>
                    </p>

                    <p>
                        <label for="telclient">Votre numéro de téléphone :</label>
                        <input type="tel" name="telclient" id="telclient" value="<?= $_GET['telclient']?>" required>            
                    </p>
            </fieldset> -->

            <fieldset>
                <p>Vous souhaitez être livré le créneau du <?= $_GET['date'] ?> à <?= $_GET['heure'] ?></p>
                <legend>Informations de contact</legend>
                    <p>
                        <input type="text" name="nomclient" id="nomclient" value="<?= $_GET['nomclient']?>" required>
                        <input type="text" name="prénomclient" id="prénomclient" value="<?= $_GET['prénomclient']?>" required>
                    </p>

                    <p>
                        <input type="email" name="mailclient" id="mailclient" value="<?= $_GET['mailclient']?>" required>

                        <input type="tel" name="telclient" id="telclient" value="<?= $_GET['telclient']?>" required>            
                    </p>
            </fieldset>



            <!-- <fieldset>
                <legend>Addresse de livraison</legend>
                <p>
                        <label for="addresse">Votre adresse postale :</label>
                        <input type="text" name="addresse" id="addresse" value="<?= $_GET['addresse']?>" required>
                    </p>

                    <p>
                        <label for="city">Ville :</label>
                        <input type="text" name="city" id="city" value="<?= $_GET['city']?>" required>
                    </p>

                    <p>
                        <label for="zip">Code Postal :</label>
                        <input type="number" name="zip" id="zip" value="<?= $_GET['zip']?>" required>
                    </p>
            </fieldset> -->

            <fieldset>
                <legend>Addresse de livraison</legend>
                    <p>
                        <input type="text" name="addresse" id="addresse" value="<?= $_GET['addresse']?>" required>
                        <input type="text" name="city" id="city" value="<?= $_GET['city']?>" required>
                    </p>

                    <p>
                        <input type="number" name="zip" id="zip" value="<?= $_GET['zip']?>" required>
                    </p>
            </fieldset>


            <fieldset>
                <legend>Votre commande</legend>
                    <p>
                        <p><label for="galette">Type de galette :</label></p>
                        <?php if(isset($_GET['galette'])) :?>
                                <?php if($_GET['galette'] == "frangipane") :?>
                                <label for="frangipane">Frangipane</label>
                                <input type="radio" name="galette" id="frangipane" value="frangipane" checked>
                                <label for="brioche">Brioche</label>
                                <input type="radio" name="galette" id="brioche" value="brioche" >

                                <?php else : ?>
                                <label for="frangipane">Frangipane</label>
                                <input type="radio" name="galette" id="frangipane" value="frangipane" >
                                <label for="brioche">Brioche</label>
                                <input type="radio" name="galette" id="brioche" value="brioche" checked>
                                <?php endif ?>

                        <?php endif ?>

                    </p>

                    <p>
                    <p><label for="boissons">Boissons :</label></p>
                        <select name="boisson-qtt" id="boisson-qtt">
                            <?php if(isset($_GET['boisson-qtt'])) :?>

                            <option value="<?= $_GET['boisson-qtt']?>"><?= $_GET['boisson-qtt']?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>

                            <?php else : ?>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>

                            <?php endif ?>
                        </select>
                        
                        <select name="boisson-name" id="boisson-name">
                        <?php if(isset($_GET['boisson-name'])) :?>

                            <option value="<?= $_GET['boisson-name']?>"><?= $_GET['boisson-name']?></option>
                            <option value="Cidre">Cidre</option>
                            <option value="Biere">Bière</option>
                            <option value="Champagne">Champagne</option>
                        <?php else : ?>
                            <option value="Cidre">Cidre</option>
                            <option value="Biere">Bière</option>
                            <option value="Champagne">Champagne</option>
                        <?php endif ?>


                        </select>
                    </p>

            </fieldset>

            <fieldset>
                <legend>Pour aller plus loin</legend>

                    <p><label for="Instructions-commande">Instructions supplémentaires :</label></p>
                    <textarea name="instructions-commande" id="Instructions-commande" cols="80" rows="7" placeholder="Une information supplémentaire à nous donner pour vous faire livrer ?"><?= $_GET['instructions-commande']?></textarea>
            
            </fieldset>
            <input type="submit" name="submitorder" value="Confirmer">
        </form>

    </main>

    <footer>

    </footer>
    <script src="../js/script.js"></script>

</body>
<?php else : 
header('Location: ../index.php');
exit(); ?>

<?php endif ?>
</html>




