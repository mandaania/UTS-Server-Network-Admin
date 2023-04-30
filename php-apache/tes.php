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

$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "Nama: " . $row["Nama"] . "<br>";
        echo "Alamat: " . $row["Alamat"] . "<br>";
        echo "Jabatan: " . $row["Jabatan"] . "<br><br>";
    }
} else {
    echo "0 results";
}

$mysqli->close();

?>