<?php
// contactlist_form.php

// This page receives the first name and emails from the coming soon page

// Address error handling.

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

//
	
// Connect and select.

if (@mysql_connect('localhost', 'dingmed_aidan', 'BHprh7abJV'))
{
	if (!@mysql_select_db ('dingmed_contactList'))
	{
		die (print mysql_error());
	}
}
else
{
	die (print mysql_error());
}

//

// Define the query.

$query = "INSERT INTO emailList
(FirstName, email, dateEntered)
VALUES ('{$_POST['name']}',
'{$_POST['email']}', NOW())";

//

// Execute the query.

if (@mysql_query ($query))
{
	;
}
else
{
	print mysql_error();
}
mysql_close();

//

// Send thanks/confirmation email.

$headers = "From: info@dingconcussion.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body><div style="width:100%;">';
$message .= '<img src="img/logo-min.png" style="width:150px; height=150px; float:left">';
$message .= '<h1>Hey ' . strip_tags($_POST['name']) . ',</h1> <br></br>';
$message .= '<h2>Thanks for your interest in the DingMed iphone/ipad application. We&_#39ll let you know when we launch.</h2>';
$message .= '</body></html>';

mail ($_POST['email'], 'Hello from DingMed!', $message, $headers);

//

phpinfo();
?>