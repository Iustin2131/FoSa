<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "fosa";
$connection = "";

// Verifică dacă ești pe Heroku
if (getenv("JAWSDB_URL")) {
    $url = parse_url(getenv("JAWSDB_URL"));
    $host = $url["host"];
    $user = $url["user"];
    $password = $url["pass"];
    $database = substr($url["path"], 1);
}

try {
    $connection = mysqli_connect($host, $user, $password, $database);
    if (!$connection) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
