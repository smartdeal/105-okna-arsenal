<?php 

$name = substr(htmlspecialchars(trim($_POST["name"])),0,30);
$tel = substr(htmlspecialchars(trim($_POST["tel"])),0,30);
$mail = substr(htmlspecialchars(trim($_POST["email"])),0,30);
$width = substr(htmlspecialchars(trim($_POST["width"])),0,30);
$height = substr(htmlspecialchars(trim($_POST["height"])),0,30);
$ref = substr(htmlspecialchars(trim($_POST["ref"])),0,100);
$utm_source = substr(htmlspecialchars(trim($_POST["utm_source"])),0,100);
$utm_medium = substr(htmlspecialchars(trim($_POST["utm_medium"])),0,100);
$utm_campaign = substr(htmlspecialchars(trim($_POST["utm_campaign"])),0,100);
$block = substr(htmlspecialchars(trim($_POST["block"])),0,100);
$utm_term = substr(htmlspecialchars(trim($_POST["utm_term"])),0,100);
$utm_content = substr(htmlspecialchars(trim($_POST["utm_content"])),0,100);
$position = substr(htmlspecialchars(trim($_POST["position"])),0,100);
$keyword = substr(htmlspecialchars(trim($_POST["keyword"])),0,100);
$title = substr(htmlspecialchars(trim($_POST["title"])),0,255);

// $mail_to = "theprofi@gmail.com";
$mail_to = "theprofi@gmail.com";

$message = '';
if( !empty($name) ) {$message = "<strong>Ваше имя:</strong> " . $name; }
if( !empty($tel) ) {$message .= "<br><strong>Телефон:</strong> " . $tel; }
if( !empty($mail) ) {$message .= "<br><strong>Email:</strong> " . $mail; }
if( !empty($width) ) {$message .= "<br><strong>Ширина:</strong> " . $width; }
if( !empty($height) ) {$message .= "<br><strong>Высота:</strong> " . $height; }
if( !empty($ref) ) {$message .= "<br><strong>Реферальная ссылка:</strong> " . $ref; }
if( !empty($utm_source) ) {$message .= "<br><strong>utm_source:</strong> " . $utm_source; }
if( !empty($utm_medium) ) {$message .= "<br><strong>utm_medium:</strong> " . $utm_medium; }
if( !empty($utm_campaign) ) {$message .= "<br><strong>utm_campaign:</strong> " . $utm_campaign; }
if( !empty($block) ) {$message .= "<br><strong>block:</strong> " . $block; }
if( !empty($utm_term) ) {$message .= "<br><strong>utm_term:</strong> " . $utm_term; }
if( !empty($utm_content) ) {$message .= "<br><strong>utm_content:</strong> " . $utm_content; }
if( !empty($position) ) {$message .= "<br><strong>position:</strong> " . $position; }
if( !empty($keyword) ) {$message .= "<br><strong>keyword:</strong> " . $keyword; }
if( !empty($title) ) {$message .= "<br><strong>Заголовок:</strong> " . $title; }

$subject = "Письмо с сайта";
$from = "info@uteplitel.ru";
$headers = "From: $from\r\nReplay-To: $from\r\nContent-type: text/html; charset=utf-8\r\n";

// mail($mail_to, $subject, $message, $headers);
echo 'success';
?>