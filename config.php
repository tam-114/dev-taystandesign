<?php
// Database configurations
define('DB_HOST', 'localhost');
define('DB_USER', 'u860659559_DevDB_2526');
define('DB_PASS', 'TAQ8+fb7?vb-LrY');
define('DB_NAME', 'u860659559_taystandes_db');

// Establish database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// General settings
define('BASE_URL', '/');
// define('BASE_URL', 'https://taystan.design/');
// define('SITE_NAME', 'My Website');

// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoload function to load classes automatically
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});
?>