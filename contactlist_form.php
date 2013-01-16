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

$message = '<html><body style="margin: 0; padding: 0;">';
$message .= '<img src="http://www.dingconcussion.com/img/emailTemplate-logo.png" style="width:50%; float:left">';
$message .= '<h1>Hey ' . strip_tags($_POST['name']) . ',</h1>';
$message .= '<h2>Thanks for your interest in the DingMed iphone/ipad application. Well let you know when we launch.</h2>';
$message .= '</body></html>';

mail ($_POST['email'], 'Hello from DingMed!', $message, $headers);

//

phpinfo();
?>