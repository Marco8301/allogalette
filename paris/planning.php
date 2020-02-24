<?php 
session_start();
include('../controller/OrderController.php');
include('../utilities/functions.php');
if(isset($_SESSION['sessionOK']) && isset($_SESSION['user'])) : 
include('../utilities/header.php')
?>

    <form action="private.php" method="get">
        <section id="bandeau-img">
            <h1>Que des galettes, pas de saucisses !</h1>
            <div></div>
        </section>
    <main style="display:flex; justify-content: center; align-items: center;">
        <div >
            <a id="previous" class="navbtn"><</a>
        </div>

        <input type="hidden" name="date" id="coucou" value="default">
        <input type="hidden" name="heure" id="coucou2" value="default">
        <input type="hidden" name="idplanning" id="coucou3" value="default">


        <div id="containerPlanning" style="margin-top: 10px; width:500px; text-align:center;">

            <div id="div1" style="background-color:white; border-radius: 5px;">

                <table>
                    <thead>
                        <tr>
                            <th>Lundi 8 Janvier</th>
                            <th>Mardi 9 Janvier</th>
                            <th>Mercredi 10 Janvier</th>
                            <th>Jeudi 11 Janvier</th>
                            <th>Vendredi 12 Janvier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($creneauxList15 as $key => $value) : ?>
                            <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>                            
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList610 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?> 
                        </tr> 

                        <tr>
                            <?php foreach ($creneauxList1115 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>        
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList1620 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>        
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList2125 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>     
                        </tr>  
                    </tbody>
                </table>
            </div>

            <div id="div2" style="display:none; background-color:white;">
                <table>
                    <thead>
                        <tr>
                            <th>Lundi 15 Janvier</th>
                            <th>Mardi 16 Janvier</th>
                            <th>Mercredi 17 Janvier</th>
                            <th>Jeudi 18 Janvier</th>
                            <th>Vendredi 19 Janvier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($creneauxList2630 as $key => $value) : ?>
                            <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>                            
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList3135 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?> 
                        </tr> 

                        <tr>
                            <?php foreach ($creneauxList3640 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>        
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList4145 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>        
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList4650 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>     
                        </tr>  
                    </tbody>
                </table>
            </div>

            <div id="div3" style="display:none; background-color:white;">
                <table>
                    <thead>
                        <tr>
                            <th>Lundi 22 Janvier</th>
                            <th>Mardi 23 Janvier</th>
                            <th>Mercredi 24 Janvier</th>
                            <th>Jeudi 25 Janvier</th>
                            <th>Vendredi 26 Janvier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($creneauxList5155 as $key => $value) : ?>
                            <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>                            
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList5660 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?> 
                        </tr> 

                        <tr>
                            <?php foreach ($creneauxList6165 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>        
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList6670 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>        
                        </tr>

                        <tr>
                            <?php foreach ($creneauxList7175 as $key => $value) : ?>
                                <td data-id="<?= $value['id_planning'] ?>" data-date="<?= $value['jour'] ?>" data-heure="<?= $value['heure'] ?>" class="<?= $value['statut'] ?>"><?= $value['heure'] ?></td>
                            <?php endforeach ?>     
                        </tr>  
                    </tbody>
                </table>            
            </div>
        </div>

        <div>
            <a id="next" class="navbtn">></a>
        </div>

    </main>
    <input type="submit" value="Sélectionner" style="position:absolute; left:50%; margin-left:-90px; background-color:grey;" id="button" disabled>

    </form>

    <footer>
        <!-- <p>C'est la partie privée du site</p>
        <button>
            <a href="logout.php">logout</a>
        </button> -->
    </footer>

    <script src="../js/script.js"></script>


</body>
<?php 
else :
header('Location: ../index.php');
exit(); ?>

<?php endif ?>
</html>