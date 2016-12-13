<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // specifico la redirezione e il codice d'errore
        header("Location: http://omnifood.startae14.dx.am/index.php?success=-1#form");
        // ed usciamo dallo script
        exit;
    }

    // Impostare l'indirizzo di posta elettronica del destinatario. Aggiornalo col TUO indirizzo desiderato.
    $to = "info@omnifood.startae14.dx.am";


    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Creo l'header della email.
    $mail_headers = "From: " .  $name . " <" .  $email . ">\r\n";
    $mail_headers .= "Reply-To: " .  $email . "\r\n";
    $mail_headers .= "X-Mailer: PHP/" . phpversion();
    
    // Invia l'email.
    mail($to, $subject, $email_content, $email_headers);
    
    // Redireziona alla pagina index.html con un codice di success
    header("Location: http://omnifood.startae14.dx.am/index.php?success=1#form");

?>