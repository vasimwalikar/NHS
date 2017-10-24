<?php


$to = 'vasim@freenet.zone';

$siteName = "";


 $name = $_POST['name'];

 $mail = $_POST['email'];
 $batch = $_POST['batch'];
 $section = $_POST['section'];
 $mobile = $_POST['mobile'];



if (isset($name) && isset($mail) && isset($mobile)) {


    $mailSub = '[Contact] [' . $siteName . '] '.$email;

    $body = 'Sender Name: ' . $name . "\n\n";
    $body .= 'Sender Mail: ' . $mail . "\n\n";
    $body .= 'Sender Batch: ' . $batch . "\n\n";
    $body .= 'Sender Section: ' . $section . "\n\n";
    $body .= 'Sender Mobile: ' . $mobile;

    $header = 'From: ' . $mail . "\r\n";
    $header .= 'Reply-To:  ' . $mail . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();

    echo mail($to, $mailSub, $body, $header);
}else{
    echo '0';
}
?>


