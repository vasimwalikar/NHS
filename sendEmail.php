<?php

require_once 'vendor/autoload.php';

function valData($data){
    if(isset($_REQUEST[$data]))
        return $_REQUEST[$data];
    else
        return '';
}

$name = valData('name');
$mail = valData('mail');
$batch = valData('batch');
$section = valData('section');
$mobile = valData('mobile');

$m = new SimpleEmailServiceMessage();
//$m->addTo(array('sridhar.rajaram@justbooksclc.com','akhil.kamalasan@justbooksclc.com'));
$m->addTo(array('vasim@freenet.zone'));
$m->setFrom('customercare@justbooksclc.com');
$m->setSubject('Franchisee Request');
//$m->setMessageFromString("Recieved Franchisee Request from below person.<br><p>First Name:</p> $fname<br>");
$text = "Recieved franchisee request from below person";
// $html = '';
$html = 'Sender Name: ' . $name . "\n\n";
$html .= 'Sender Mail: ' . $mail . "\n\n";
$html .= 'Sender Batch: ' . $batch . "\n\n";
$html .= 'Sender Section: ' . $section . "\n\n";
$html .= 'Sender Mobile: ' . $mobile;
$m->setMessageFromString($text, $html);

$ses = new SimpleEmailService('AKIAJUYFFWPTDDSSNO3Q', 'Z+8AGSX8z3lWAhmHXVgISHkOwcKD3O9TSfkvImfX');
print_r($ses->sendEmail($m));

?>