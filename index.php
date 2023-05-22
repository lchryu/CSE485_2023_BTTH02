<?php
// index.php

// Import Connection class
require_once 'config/Connection.php';

// Create a new instance of the Connection class
$connection = new Connection();

// Establish a database connection
$pdo = $connection->connect();

// Include the login view
include 'views/login.php';
?>
