<?php  

// Create connection to DB
$conn = mysqli_connect('localhost', 'root', '', 'shoutit');

// Test the connection to the DB
if (mysqli_connect_errno()){
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
