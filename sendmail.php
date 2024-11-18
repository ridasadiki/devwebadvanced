<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php'; // Assurez-vous que Composer est bien configuré
require_once 'config.php';          // Charge les variables d'environnement

$mail_app_pwd = $_ENV['mail_app_pwd']; // Mot de passe Gmail récupéré depuis .env

$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->SMTPDebug = 0; // Débogage désactivé en production (2 pour débogage détaillé)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ridarap8@gmail.com'; // Remplacez par votre adresse Gmail
    $mail->Password = $mail_app_pwd;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configuration des destinataires
    $mail->setFrom('ridarap8@gmail.com', 'Nom de l\'expéditeur');
    $mail->addAddress('ridarap4@gmail.com', 'Nom du destinataire');
    $mail->addReplyTo('ridarap8@gmail.com', 'Réponse');

    // Contenu du message
    $mail->isHTML(true);
    $mail->Subject = 'Sujet du message';
    $mail->Body    = 'Ceci est un message envoyé via PHPMailer. <b>Profitez-en !</b>';
    $mail->AltBody = 'Ceci est une version texte du message pour les clients qui ne supportent pas HTML.';

    // Envoi
    $mail->send();
    echo 'Le message a bien été envoyé.';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
}
?>
