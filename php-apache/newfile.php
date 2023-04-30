<?php

$host = 'new-sql-container';
$user = 'root';
$password = 'asdasd123';
$dbname = 'Redlock';

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$sql = "SELECT COUNT(*) as count FROM users";
$result = $mysqli->query($sql);

$row = $result->fetch_assoc();
echo "There are " . $row["count"] . " row(s) in the table.";

$mysqli->close();

?>