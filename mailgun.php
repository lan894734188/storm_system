<?php
date_default_timezone_set("Asia/Shanghai");
$conn=new mysqli ('127.0.0.1:3306','username','password','database') or die("database error");
$conn->query("SET NAMES utf8");

// Function XXX 
$_GET['data1']=$data1;
$_GET['data2']=$data2;

//SQL Function
$stmt_data=$conn->prepare("$sql");
$stmt_data=$conn->bind_param('s', $data_bind);
$stmt_data->exec();

// Function XXX End


// Funciton mailgun 
curl -s --user 'api:YOUR_API_KEY' \
    https://api.mailgun.net/v3/YOUR_DOMAIN_NAME/messages \
    -F from='Excited User <mailgun@YOUR_DOMAIN_NAME>' \
    -F to=YOU@YOUR_DOMAIN_NAME \
    -F to=bar@example.com \
    -F subject='Hello' \
    -F text='Testing some Mailgun awesomness!'

function mailgun_sender (
	$sender_curl = curl_init();  
	curl_setopt($sender_curl, CURLOPT_URL,"https://api.mailgun.net/v3/YOUR_DOMAIN_NAME/messages");  
	curl_setopt($sender_curl, CURLOPT_USERAGENT, 'api:YOUR_API_KEY');
	curl_setopt($sender_curl, CURLOPT_POST, 1 );
	curl_setopt($sender_curl, CURLOPT_POSTFIELDS, "from=Excited User <mailgun@YOUR_DOMAIN_NAME>");
	curl_setopt($sender_curl, CURLOPT_POSTFIELDS, "to=YOU@YOUR_DOMAIN_NAME");
	curl_setopt($sender_curl, CURLOPT_POSTFIELDS, "to=bar@example.com");
	curl_setopt($sender_curl, CURLOPT_POSTFIELDS, "subject=Hello");
	curl_setopt($sender_curl, CURLOPT_POSTFIELDS, "text=Testing some Mailgun awesomness!");
	curl_setopt($sender_curl, CURLOPT_RETURNTRANSFER, 1);
	$sender_close = curl_exec ($sender_curl);

)



?>
