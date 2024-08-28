<?php
session_start();

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Lade die Umgebungsvariablen
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Sicherheitsüberprüfungen
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['token'], $_POST['name'], $_POST['email'], $_POST['message'], $_POST['agreement']) || $_POST['token'] !== $_SESSION['token'] || !empty($_POST['your_email'])) {
  http_response_code(403);
  exit("Ungültige Anfrage");
}

// Validierung und Sanitisierung der Eingaben
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_SPECIAL_CHARS);
$company = filter_var(trim($_POST['company']), FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($name) || empty($email) || empty($message)) {
  http_response_code(400);
  exit("Bitte füllen Sie alle erforderlichen Felder aus.");
}

$mail = new PHPMailer(true);

try {
  // Servereinstellungen
  $mail->isSMTP();
  $mail->Host       = $_ENV['SMTP_HOST'];  // SMTP Server
  $mail->SMTPAuth   = true;
  $mail->Username   = $_ENV['SMTP_USERNAME']; // SMTP Benutzername
  $mail->Password   = $_ENV['SMTP_PASSWORD']; // SMTP Passwort
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  // Empfänger
  $mail->setFrom('office@webdesign-alcor.at', 'Webdesign Alcor');
  $mail->addAddress('office@webdesign-alcor.at'); // Empfänger

  // HTML Inhalt
  $mailContent = <<<EOT
<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #ffffff;
      margin: 40px auto;
      max-width: 600px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
      border-radius: 8px;
    }

    .header {
      background-color: #0056b3;
      padding: 15px;
      color: #ffffff;
      text-align: center;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .header h1 {
      margin: 0;
      font-size: 24px;
    }

    .content {
      padding: 20px;
      line-height: 1.6;
    }

    .footer {
      background-color: #f8f9fa;
      padding: 15px;
      text-align: center;
      font-size: 12px;
      color: #666;
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
    }

    .footer small {
      display: block;
      margin-top: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>Kontaktanfrage ALCOR</h1>
    </div>
    <div class="content">
      <p>Hallo Robert,</p>
      <p>Du hast eine neue Anfrage erhalten</p>
      <p><strong>Name:</strong> {$name}</p>
      <p><strong>Firma:</strong> {$company}</p>
      <p><strong>Telefon:</strong> {$phone}</p>
      <p><strong>E-Mail:</strong> {$email}</p>
      <p><strong>Nachricht:</strong> {$message}</p>
    </div>
    <div class="footer">
      Heute ist {date("d.m.Y H:i:s")}<br>
      <small>Webdesign Alcor</small>
    </div>
  </div>
</body>

</html>
EOT;

  $mail->isHTML(true);
  $mail->Subject = 'Neue Kontaktanfrage';
  $mail->Body    = $mailContent;

  $mail->send();
  header('Location: danke.php'); // Weiterleitung nach dem Senden
} catch (Exception $e) {
  error_log("Nachricht konnte nicht gesendet werden. Mailer Fehler: {$mail->ErrorInfo}");
  echo "Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.";
}
