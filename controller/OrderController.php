<?php
include('../model/OrderModel.class.php');

    $displayCreneaux = new OrderModel();
    $creneauxList = $displayCreneaux->getCreneauxList();

    $creneauxList15 = array_slice($creneauxList, 0, 5);
    $creneauxList610 = array_slice($creneauxList, 5, 5);
    $creneauxList1115 = array_slice($creneauxList, 10, 5);
    $creneauxList1620 = array_slice($creneauxList, 15, 5);
    $creneauxList2125 = array_slice($creneauxList, 20, 5);

    $creneauxList2630 = array_slice($creneauxList, 25, 5);
    $creneauxList3135 = array_slice($creneauxList, 30, 5);
    $creneauxList3640 = array_slice($creneauxList, 35, 5);
    $creneauxList4145 = array_slice($creneauxList, 40, 5);
    $creneauxList4650 = array_slice($creneauxList, 45, 5);

    $creneauxList5155 = array_slice($creneauxList, 50, 5);
    $creneauxList5660 = array_slice($creneauxList, 55, 5);
    $creneauxList6165 = array_slice($creneauxList, 60, 5);
    $creneauxList6670 = array_slice($creneauxList, 65, 5);
    $creneauxList7175 = array_slice($creneauxList, 70, 5);




// Ça c'est pour ajouter la commande en BDD et envoyer un mail si on clique sur le bouton submitorder
if(isset($_POST['submitorder'])) {
    $idplanning = $_POST['idplanning'];
    $nom = $_POST['nomclient'];
    $prenom = $_POST['prénomclient'];
    $mail = $_POST['mailclient'];
    $tel = $_POST['telclient'];

    $addresse = $_POST['addresse'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];

    $galette = $_POST['galette'];
    $boissonqtt = $_POST['boisson-qtt'];
    $boissonnom = $_POST['boisson-name'];
    $instruction = $_POST['instructions-commande'];


    $order = new OrderModel();
    $order->placeOrder($idplanning, $nom, $prenom, $mail, $tel, $addresse, $city, $zip, $galette, $boissonqtt, $boissonnom, $instruction);


    $subject = 'Nouvelle commande de '. $nom . ' ' . $prenom;
    $headers = "Content-type: text/html; charset= iso-8859-1\n"; 

    $body=   '<!doctype html>
        <html>
        
        <head>
          <meta name="viewport" content="width=device-width">
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Email transactionnel</title>
          <style>
            @media only screen and (max-width: 620px) {
              table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
              }
        
              table[class=body] p,
              table[class=body] ul,
              table[class=body] ol,
              table[class=body] td,
              table[class=body] span,
              table[class=body] a {
                font-size: 16px !important;
              }
        
              table[class=body] .wrapper,
              table[class=body] .article {
                padding: 10px !important;
              }
        
              table[class=body] .content {
                padding: 0 !important;
              }
        
              table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
              }
        
              table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
              }
        
              table[class=body] .btn table {
                width: 100% !important;
              }
        
              table[class=body] .btn a {
                width: 100% !important;
              }
        
              table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
              }
            }
        
            /* -------------------------------------
                PRESERVE THESE STYLES IN THE HEAD
            ------------------------------------- */
            @media all {
              .ExternalClass {
                width: 100%;
              }
        
              .ExternalClass,
              .ExternalClass p,
              .ExternalClass span,
              .ExternalClass font,
              .ExternalClass td,
              .ExternalClass div {
                line-height: 100%;
              }
        
              .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
              }
        
              #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
              }
        
              .btn-primary table td:hover {
                background-color: #34495e !important;
              }
        
              .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
              }
            }
          </style>
        </head>
        
        <body class=""
          style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
        
          <table border="0" cellpadding="0" cellspacing="0" class="body"
            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: white;">
        
            <tr>
              <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
              <td class="container"
                style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
                <div class="content"
                  style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">
        
                  <table class="main"
                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
        
                    <!-- DÉBUT ZONE CONTENU PRINCIPAL -->
                    <tr>
        
                      <td class="wrapper"
                        style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
        
                        <table border="0" cellpadding="0" cellspacing="0"
                          style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                          <tr>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                              <img src="http://marcomalaspina.com/img/new-logo-hallo.png" alt="logo-hallogalette"
                                width="50%;" style="padding-bottom:15px;">
                              <p
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                Bonjour Admin,</p>
                              <p
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                Vous avez reçu une nouvelle commande !
                              </p>
        
                              <ul
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; padding-left:20px; color: #142738;">


                                <li><span style="font-weight:bold;"> Prénom : </span>' . $prenom . '</li>
                                <li><span style="font-weight:bold;"> Nom : </span>' . $nom . '</li>
                                <li><span style="font-weight:bold;"> Adresse mail : </span>' . $mail . '</li>
                                <li><span style="font-weight:bold;"> Numéro de téléphone : </span>' . $tel . '</li>
                                <li><span style="font-weight:bold;"> Adresse de livraison : </span>' . $addresse . ' ' . $city . ' ' . $zip  . '</li>
                                <li><span style="font-weight:bold;"> Type de galette : </span>' . $galette . '</li>
                                <li><span style="font-weight:bold;"> Boisson : </span>' . $boissonqtt . ' ' . $boissonnom .' </li>
                                <li><span style="font-weight:bold;"> Instruction supplémentaire : </span>' . $instruction . '</li>
                              </ul> 
        
                              <!-- <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"
                                style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                <tbody>
                                  <tr>
                                    <td align="left"
                                      style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                      <table border="0" cellpadding="0" cellspacing="0"
                                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                        <tbody>
                                          <tr>
                                            <td
                                              style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;">
                                              <a href="http://htmlemail.io" target="_blank"
                                                style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Call
                                                To Action</a> </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table> -->
                              <p
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                Allez, au boulot !</p>

                              <hr style="border:0.3px solid silver;">
                            </td>
                          </tr>
                        </table>
        
                        <!-- FIN ZONE CONTENU PRINCIPAL -->
        
                        <!-- DÉBUT FOOTER -->
        
                        <div class="footer" style="clear: both; Margin-top: 10px; text-align: left; width: 60%;">
        
                          <table border="0" cellpadding="0" cellspacing="0"
                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                            <tr>
                              <td class="content-block"
                                style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: left;">
        
                                <p
                                  style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                  Vous recevez ce mail car vous êtes en charge des commandes du site.</p>
    
                              </td>
                            </tr>
                          </table>
        
                        </div>
    
                        <div class="footer" style="clear: both; text-align: left; width: 60%;">
        
                          <table border="0" cellpadding="0" cellspacing="0"
                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                            <tr>
                              <td class="content-block"
                                style="font-family: sans-serif; vertical-align: top; font-size: 12px; color: #999999; text-align: left;">
        
                                <small
                                  style="font-family: sans-serif; font-size: 11px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: grey;">
                                  Copyright Marc-Antoine MALASPINA.<br>
                                  marcanmalas@gmail.com
                                </small>
        
                              </td>
                            </tr>
        
                          </table>
        
                        </div>
        
                      </td>
                    </tr>
        
                  </table>
        
        
                  <!-- FIN FOOTER -->
        
                  <!-- FIN CONTAINER BLANC -->
                </div>
              </td>
              <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
            </tr>
          </table>
        </body>
        
        </html>';


    $send = mail('marcanmalas@gmail.com', $subject, $body, $headers);


    $subjectCustomer = 'Confirmation de votre Commande';

    $bodyCustomer=   '<!doctype html>
        <html>
        
        <head>
          <meta name="viewport" content="width=device-width">
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Email transactionnel</title>
          <style>
            @media only screen and (max-width: 620px) {
              table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
              }
        
              table[class=body] p,
              table[class=body] ul,
              table[class=body] ol,
              table[class=body] td,
              table[class=body] span,
              table[class=body] a {
                font-size: 16px !important;
              }
        
              table[class=body] .wrapper,
              table[class=body] .article {
                padding: 10px !important;
              }
        
              table[class=body] .content {
                padding: 0 !important;
              }
        
              table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
              }
        
              table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
              }
        
              table[class=body] .btn table {
                width: 100% !important;
              }
        
              table[class=body] .btn a {
                width: 100% !important;
              }
        
              table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
              }
            }
        
            /* -------------------------------------
                PRESERVE THESE STYLES IN THE HEAD
            ------------------------------------- */
            @media all {
              .ExternalClass {
                width: 100%;
              }
        
              .ExternalClass,
              .ExternalClass p,
              .ExternalClass span,
              .ExternalClass font,
              .ExternalClass td,
              .ExternalClass div {
                line-height: 100%;
              }
        
              .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
              }
        
              #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
              }
        
              .btn-primary table td:hover {
                background-color: #34495e !important;
              }
        
              .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
              }
            }
          </style>
        </head>
        
        <body class=""
          style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
        
          <table border="0" cellpadding="0" cellspacing="0" class="body"
            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: white;">
        
            <tr>
              <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
              <td class="container"
                style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
                <div class="content"
                  style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">
        
                  <table class="main"
                    style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
        
                    <!-- DÉBUT ZONE CONTENU PRINCIPAL -->
                    <tr>
        
                      <td class="wrapper"
                        style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
        
                        <table border="0" cellpadding="0" cellspacing="0"
                          style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                          <tr>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                              <img src="http://marcomalaspina.com/img/new-logo-hallo.png" alt="logo-hallogalette"
                                width="50%;" style="padding-bottom:15px;">
                              <p
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                Bonjour ' . $prenom . ',</p>
                              <p
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                Nous confirmons la bonne réception de votre commande !
                              </p>

                              <p
                              style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                              Voici un récapitulatif :
                            </p>
        
                              <ul
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; padding-left:20px; color: #142738;">


                                <li><span style="font-weight:bold;"> Prénom : </span>' . $prenom . '</li>
                                <li><span style="font-weight:bold;"> Nom : </span>' . $nom . '</li>
                                <li><span style="font-weight:bold;"> Adresse mail : </span>' . $mail . '</li>
                                <li><span style="font-weight:bold;"> Numéro de téléphone : </span>' . $tel . '</li>
                                <li><span style="font-weight:bold;"> Adresse de livraison : </span>' . $addresse . ' ' . $city . ' ' . $zip  . '</li>
                                <li><span style="font-weight:bold;"> Type de galette : </span>' . $galette . '</li>
                                <li><span style="font-weight:bold;"> Boisson : </span>' . $boissonqtt . ' ' . $boissonnom .' </li>
                                <li><span style="font-weight:bold;"> Instruction supplémentaire : </span>' . $instruction . '</li>
                              </ul> 
        
                              <!-- <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"
                                style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                <tbody>
                                  <tr>
                                    <td align="left"
                                      style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                      <table border="0" cellpadding="0" cellspacing="0"
                                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                        <tbody>
                                          <tr>
                                            <td
                                              style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;">
                                              <a href="http://htmlemail.io" target="_blank"
                                                style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Call
                                                To Action</a> </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table> -->
                              <p
                                style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                Merci pour votre commande !</p>

                              <hr style="border:0.3px solid silver;">
                            </td>
                          </tr>
                        </table>
        
                        <!-- FIN ZONE CONTENU PRINCIPAL -->
        
                        <!-- DÉBUT FOOTER -->
        
                        <div class="footer" style="clear: both; Margin-top: 10px; text-align: left; width: 60%;">
        
                          <table border="0" cellpadding="0" cellspacing="0"
                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                            <tr>
                              <td class="content-block"
                                style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: left;">
        
                                <p
                                  style="font-family: sans-serif; font-size: 13px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                                  Vous recevez ce mail car vous avez passé commande.</p>
    
                              </td>
                            </tr>
                          </table>
        
                        </div>
    
                        <div class="footer" style="clear: both; text-align: left; width: 60%;">
        
                          <table border="0" cellpadding="0" cellspacing="0"
                            style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                            <tr>
                              <td class="content-block"
                                style="font-family: sans-serif; vertical-align: top; font-size: 12px; color: #999999; text-align: left;">
        
                                <small
                                  style="font-family: sans-serif; font-size: 11px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: grey;">
                                  Copyright Marc-Antoine MALASPINA.<br>
                                  marcanmalas@gmail.com
                                </small>
        
                              </td>
                            </tr>
        
                          </table>
        
                        </div>
        
                      </td>
                    </tr>
        
                  </table>
        
        
                  <!-- FIN FOOTER -->
        
                  <!-- FIN CONTAINER BLANC -->
                </div>
              </td>
              <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
            </tr>
          </table>
        </body>
        
        </html>';

    

    $sendCustomer = mail($mail, $subjectCustomer, $bodyCustomer, $headers);

    header('Location: ../index.php');
    exit();

}

    // Ça c'est pour afficher la liste des commandes en page admin
    $displayList = new OrderModel();
    $orderList = $displayList->getOrdersList();

    // Ça c'est pour avoir le détail d'une commande
    if(isset($_GET['id'])) {
    $idorder = $_GET['id'];
    $displaySingle = new OrderModel();
    $orderSingle = $displaySingle->getSingleOrder($idorder);
    }
?>