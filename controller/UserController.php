<?php
include('../model/UserModel.class.php');

// Ça c'est pour envoyer un mail avec le mot de passe quand le formulaire est submit + ajouter en DB la personne qui a demandé le password

if(isset($_POST['askforpassword'])) {
  $prenom = $_POST['prenom_askforpass'];
  $nom = $_POST['nom_askforpass'];
  $company = $_POST['company_askforpass'];
  $email = $_POST['email_askforpass'];

  $user = new UserModel();
  $user->addUserToDb($prenom, $nom, $company, $email);

  $subject = 'Votre mot de passe Allogalette';
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
                              Bonjour ' . $prenom . '</p>
                            <p
                              style="font-family: sans-serif; font-size: 15px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #142738;">
                              Le mot de passe est <strong> salutparis </strong>
                            </p>
    
      
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


  $send = mail($email, $subject, $body, $headers);

  header('Location: ../index.php');
  exit();

}

    // Ça c'est pour afficher la liste des users en page admin
    $displayList = new UserModel();
    $userList = $displayList->getUserList();

    // Ça c'est pour avoir le détail d'un user
    if(isset($_GET['id'])) {
      $idorder = $_GET['id'];
      $displaySingle = new UserModel();
      $userSingle = $displaySingle->getSingleUser($idorder);
      }

?>