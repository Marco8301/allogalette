
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allogalette</title>
    <script src="js/lib/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main id="mainindex">
        <section id="blur">
        </section>


        <section id="bg">
        </section>
        <article id="index-container">
            <img src="img/new-logo-hallo.png" alt="">

            <form action="login.php" method="post">
                    <?php if(!isset($_GET['err'])) : ?>
                        <input type="password" name="pass" id="pass" placeholder="Entrez votre mot de passe" required>                <!--
                --><input type="submit" value="confirmer" id="submitpass">

                        <?php else : ?>

                        <input type="password" name="pass" id="pass" placeholder="<?=$_GET['err']?>" required>                <!--
                --><input type="submit" value="confirmer" id="submitpass">

                    <?php endif ?>
            </form>
            <p id="reclaim">Demandez votre mot de passe !</p>
        </article>

        <div id="pop-up">
        <span id="cross">X</span>

            <div>
                <p>Vous souhaitez profiter du service Allogalette ?</p>
                <p>Remplissez ce formulaire & nous vous enverrons votre mot de passe !</p>

            </div>

            <form id="formRequestAccess" action="controller/UserController.php" method="post">
                <input type="text" placeholder="Prénom*" name="prenom_askforpass">
                <input type="text" placeholder="Nom*" name="nom_askforpass">
                <input type="text" placeholder="Société*" name="company_askforpass">
                <input type="email" placeholder="Adresse Mail*" name="email_askforpass">
                <input type="submit" name="askforpassword" value="CONFIRMER">
            </form>
        </div>

    </main>

<?php 
include("utilities/footer.php");
?>



        <script>

        let geoloc = document.getElementById('zoneLivraison');

        if (navigator.geolocation) {
            console.log('il y a géoloc');

            navigator.geolocation.getCurrentPosition(function (position) {
                console.log(position)
                $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&key=AIzaSyA9VCeYTBLZprpSfqWOtlw-j9rQUVTsCzg", function (data) {
                    console.log(data)

                    adresse = data.results[9].formatted_address
                })
            })
        }

        var pop = document.getElementById('pop-up');
        var croix = document.getElementById('cross');
        var para = document.getElementById('reclaim');
        var blur = document.getElementById('blur');

        para.addEventListener('click', function(){
            pop.style.display="block";
            blur.style.display="block";

        });

        croix.addEventListener('click', function(){
            pop.style.display="none";
            blur.style.display="none";

        });


        
        </script>
</body>

</html>