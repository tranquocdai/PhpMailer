<?php
	//goi thu vien
	include('class.smtp.php');
	include "class.phpmailer.php"; 
	include "functions.php"; 
	$title = 'Send Email by PhpMailer';
	$content = 'Body content Email here.';
	$nTo = 'Tran Quoc Dai';
	$mTo = 'example@gmail.com';
	$diachi = 'ccemail@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
	if($mail==1)
	echo 'Success Send ';
	else echo 'Error!';
?>