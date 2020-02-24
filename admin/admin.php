

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Démo Hallogalette</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header>

    </header>

    <main>
        <section>
        </section>
        <article>
            <form action="../adminlogin.php" method="post">
                    <label for="adminlogin">Login</label>
                    <input type="text" name="adminlogin" id="adminlogin" required>

                    <label for="adminpass">Entrez le mot de passe</label>
                    <input type="password" name="adminpass" id="adminpass" required>

                <input type="submit" name="adminsubmitlogin" value="confirmer">
            </form>
        </article>
    </main>

    <footer>

    </footer>

    <?php if(isset($_GET['err'])) : ?>
        
        <?= $_GET['err'] ?>

        <?php endif ?>

</body>

</html>