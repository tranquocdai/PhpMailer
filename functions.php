<?php
function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
	$nFrom = 'tranquocdai.com';
	$mFrom = 'admin@gmail.com';	//Your email
	$mPass = 'pass';		//pass email
	$mail             = new PHPMailer();
	$body             = $content;
	$mail->IsSMTP(); 
	$mail->CharSet 	= "utf-8";
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  	// enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      	
	$mail->Port       = 465;
	$mail->Username   = $mFrom;  // GMAIL username
	$mail->Password   = $mPass;           	 // GMAIL password
	$mail->SetFrom($mFrom, $nFrom);
	//string to array
	$ccmail = explode(',', $diachicc);
	$ccmail = array_filter($ccmail);
	if(!empty($ccmail)){
		foreach ($ccmail as $k => $v) {
			$mail->AddCC($v);
		}
	}
	$mail->Subject    = $title;
	$mail->MsgHTML($body);
	$address = $mTo;
	$mail->AddAddress($address, $nTo);
	$mail->AddReplyTo('contact@tranquocdai.com', 'tranquocdai.com');
	if(!$mail->Send()) {
		return 0;
	} else {
		return 1;
	}
}

function sendMailAttachment($title, $content, $nTo, $mTo,$diachicc='',$file,$filename){
	$nFrom = 'tranquocdai.com';
	$mFrom = 'xxxx@gmail.com';	//Your email 
	$mPass = 'passlamatkhua';		//Email pass
	$mail             = new PHPMailer();
	$body             = $content;
	$mail->IsSMTP(); 
	$mail->CharSet 	= "utf-8";
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  	// enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      	
	$mail->Port       = 465;
	$mail->Username   = $mFrom;  // GMAIL username
	$mail->Password   = $mPass;           	 // GMAIL password
	$mail->SetFrom($mFrom, $nFrom);
	//chuyen chuoi thanh mang
	$ccmail = explode(',', $diachicc);
	$ccmail = array_filter($ccmail);
	if(!empty($ccmail)){
		foreach ($ccmail as $k => $v) {
			$mail->AddCC($v);
		}
	}
	$mail->Subject    = $title;
	$mail->MsgHTML($body);
	$address = $mTo;
	$mail->AddAddress($address, $nTo);
	$mail->AddReplyTo('info@freetuts.net', 'Freetuts.net');
	$mail->AddAttachment($file,$filename);
	if(!$mail->Send()) {
		return 0;
	} else {
		return 1;
	}
}
?>