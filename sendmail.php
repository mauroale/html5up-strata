<?php

include('../../../wp-load.php');
$to = 'mauro.ale7@gmail.com';
$subject = 'Contato Blog';
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'] . "\r\n";


$send = wp_mail( $to, $subject, $message, $headers  );

if( $send ){
	wp_redirect( home_url('/')  .'?e=1', 301 ); exit;

}else{
	wp_redirect( home_url('/')  .'?e=2', 301 ); exit;	
}


?>

