<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // specifico la redirezione e il codice d'errore
        header("Location: http://startae14.gq/omnifood/index.php?success=-1#form");
        // ed usciamo dallo script
        exit;
    }

    // Impostare l'indirizzo di posta elettronica del destinatario. Aggiornalo col TUO indirizzo desiderato.
    $to = "info@startae14.gq";


    // Set the email subject.
    $subject = "New contact from $name";

    // Setto oggetto risposta
    $subjectConf = "omnifood confirmation";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Creo l'header della email.
    $mail_headers = "From: " .  $name . " <" .  $email . ">\r\n";
    $mail_headers .= "Reply-To: " .  $email . "\r\n";
    $mail_headers .= "X-Mailer: PHP/" . phpversion();
    
    // Build content response
    $email_content_res = "Grazie per esserti registrato! Ci sentiamo presto.";

    // Invia l'email.
    mail($to, $subject, $email_content, $email_headers);
    // Invia Risposta
    mail($email, $subjectConf, $email_content_res, $email_headers);

    
    // Redireziona alla pagina index.html con un codice di success
    header("Location: http://startae14.gq/omnifood/index.php?success=1#form");

?>