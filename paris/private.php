<?php 
session_start();
include('../utilities/functions.php');
if(isset($_SESSION['sessionOK']) && isset($_SESSION['user'])) : 
include('../utilities/header.php')
?>

    <main>
        <section id="bandeau-img">
            <h1>Que des galettes, pas de saucisses !</h1>
            <div></div>
        </section>

        <form id="formu1" action="recap.php" method="get">
            <input type="hidden" name="date" value="<?= $_GET['date'] ?>">
            <input type="hidden" name="heure" value="<?= $_GET['heure'] ?>">
            <input type="hidden" name="idplanning" value="<?= $_GET['idplanning'] ?>">

            <fieldset>
                <p>Vous souhaitez être livré le créneau du <?= $_GET['date'] ?> à <?= $_GET['heure'] ?></p>
                <legend>Informations de contact</legend>
                    <p>
                        <input type="text" name="nomclient" id="nomclient" placeholder="Nom" required>
                        <input type="text" name="prénomclient" id="prénomclient" placeholder="Prénom" required>
                    </p>

                    <p>
                        <input type="email" name="mailclient" id="mailclient" placeholder="Adresse mail" required>

                        <input type="tel" name="telclient" id="telclient" placeholder="Numéro de téléphone" required>            
                    </p>
            </fieldset>

            <fieldset>
                <legend>Addresse de livraison</legend>
                    <p>
                        <input type="text" name="addresse" id="addresse" placeholder="Adresse postale" required>
                        <input type="text" name="city" id="city" placeholder="Ville" required>
                    </p>

                    <p>
                        <input type="number" name="zip" id="zip" placeholder="Code Postal" required>
                    </p>

            </fieldset>

            <fieldset>
                <legend>Votre commande</legend>
                    <p>
                        <p><label for="galette">Type de galette :</label></p>

                        <input type="radio" name="galette" id="frangipane" value="frangipane" required>
                        <label for="frangipane">Frangipane</label>

                        <input type="radio" name="galette" id="brioche" value="brioche" required>
                        <label for="brioche">Brioche</label>

                    </p>

                    <p>
                    <p><label for="boissons">Boissons :</label></p>
                        <select name="boisson-qtt" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select name="boisson-name" id="">
                            <option value="Cidre">Cidre</option>
                            <option value="Biere">Bière</option>
                            <option value="Champagne">Champagne</option>
                        </select>
                    </p>

            </fieldset>

            <fieldset>
                <legend>Pour aller plus loin</legend>

                    <p><label for="Instructions-commande">Instructions supplémentaires :</label></p>
                    <textarea name="instructions-commande" id="Instructions-commande" cols="80" rows="7" placeholder="Une information supplémentaire à nous donner pour vous faire livrer ?"></textarea>
            
            </fieldset>
            <input type="submit" name="submitorder" value="Confirmer">
        </form>

    </main>

    <footer>
        <!-- <p>C'est la partie privée du site</p>
        <button>
            <a href="logout.php">logout</a>
        </button> -->
    </footer>
    <script src="../js/script.js"></script>

</body>
<?php else :
header('Location: ../index.php');
exit(); ?>

<?php endif ?>
</html>