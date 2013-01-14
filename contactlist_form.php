<?php
// contactlist_form.php

// This page receives the first name and emails from the coming soon page

// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

if (isset ($_POST['submit'])) //handle the form
{	
	// Connect and select.
	if ($dbc = @mysql_connect('localhost', 'dingmed_aidan', 'BHprh7abJV'))
	{
		if (!@mysql_select_db ('dingmed_contactList'))
		{
			die (mysql_error());
		}
	}
	else
	{
		die (mysql_error());
	}
	// Define the query.
	$query = "INSERT INTO emailList
	(ID, LastName, FirstName, email, phone)
	VALUES (,,'{$_POST['name']}',
	'{$_POST['email']}',)";
	// Execute the query.
	if (@mysql_query ($query))
	{
		print '<p> HMM ... WHAT THE F IS THIS GONNA LOOK LIKE?!? </p>';
	}
	else
	{
		print '<p> DIDNT WORK ... WHAT DOES THIS LOOK LIKE?!? <b>' . mysql_error() . "/b>. The query was $query. </p>";
	}
	mysql_close();
}
?>