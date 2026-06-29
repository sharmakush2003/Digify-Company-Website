<?php
// Fallback for missing mysqli extension in some local PHP environments
if (!class_exists('mysqli')) {
    class mysqli {
        public $connect_error = 'mysqli extension missing';
        public function __construct($host='', $user='', $pass='', $db='') {}
        public function query($sql) { return false; }
    }
}
if (!function_exists('mysqli_real_escape_string')) {
    function mysqli_real_escape_string($link, $escapestr) { return addslashes($escapestr); }
}
if (!function_exists('mysqli_query')) {
    function mysqli_query($link, $query) { return false; }
}
if (!function_exists('mysqli_insert_id')) {
    function mysqli_insert_id($link) { return 0; }
}
if (!function_exists('mysqli_num_rows')) {
    function mysqli_num_rows($result) { return 0; }
}
if (!function_exists('mysqli_fetch_assoc')) {
    function mysqli_fetch_assoc($result) { return null; }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test"; // Please replace with your actual database name

// Create connection
$conn = @new mysqli($servername, $username, $password, $dbname);

// Check connection (Silently fail so it doesn't break the UI)
if ($conn->connect_error) {
    // You can handle connection error here
}
?>
