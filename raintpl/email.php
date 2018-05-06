<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "vendor/autoload.php";

    use Rain\Tpl;
    // config
    $config = array(
        "tpl_dir"       => "tpl/",
        "cache_dir"     => "cache/",
    );
    Tpl::configure( $config );
    
    // create the Tpl object
    $tpl = new Tpl;
    // assign a variable
    $tpl->assign( "name", "Obi Wan Kenoby" );
    $tpl->assign( "version", PHP_VERSION );
    // draw the template
    $html = $tpl->draw("index", true); //true para guardar o conteúdo gerado na variável e não mostrar na tela

    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "user@gmail.com";

    //Password to use for SMTP authentication
    $mail->Password = "password";

    //Set who the message is to be sent from
    $mail->setFrom('user@gmail.com', 'Pedro Lopes');

    //Set an alternative reply-to address
    //$mail->addReplyTo('user@gmail.com', 'Pedro Lopes');

    //Set who the message is to be sent to
    $mail->addAddress('user@gmail.com', 'Pedro Lopes');

    //Set the subject line
    $mail->Subject = 'Teste PHPMailer e RainTPL';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($html);

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }



?>