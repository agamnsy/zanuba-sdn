<?php
$host = getenv("DB_HOST");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$db_name = getenv("DB_NAME");

$koneksi = new mysqli($host, $username, $password, $db_name);
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
