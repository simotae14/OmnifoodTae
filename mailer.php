<?php

    // Recupero del valori dei campi form, rimuovo i tag html e gli spazi bianchi.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Controllo i dati.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // specifico la redirezione e il codice d'errore
        header("Location: https://omnifoodtae.herokuapp.com/index.php?success=-1#form");
        // ed usciamo dallo script
        exit;
    }

    // Impostare l'indirizzo di posta elettronica del destinatario. Aggiornalo col TUO indirizzo desiderato.
    $recipient = "simone.taeggi@cerved.com";

    // Imposta l'oggetto della email.
    $subject = "New contact from $name";

    // Creo il contenuto della email.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Creo l'header della email.
    $email_headers = "From: $name <$email>";

    // Invia l'email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redireziona alla pagina index.html con un codice di success
    header("Location: https://omnifoodtae.herokuapp.com/index.php?success=1#form");

?>