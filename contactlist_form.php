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

$message = '<html><body style="margin: 0; padding: 0;font-family: sans-serif;">';
$message .= '<img src="http://www.dingconcussion.com/img/emailTemplate-logo.png" style="float:left;width:40%;" alt="ding medical concussion app logo">';
$message .= '<h1 style="color:#333333; float:left; width: 60%;">Hey ' . strip_tags($_POST['name']) . ',</h1>';
$message .= '<h2 style="color:#333333; float:left; width: 60%;">Thanks for your interest in Ding Medical. We&apos;ll let you know when we launch our iOS app.</h2>';
$message .= '</body></html>';

mail ($_POST['email'], 'Hello from DingMed!', $message, $headers);

//

phpinfo();
?>