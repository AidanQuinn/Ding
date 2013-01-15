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

$body = ""

mail ($_POST['email'], 'Thanks for signing up for the DingMed news letter!', $body, 'From: DINGEMAIL');

//
phpinfo();
?>