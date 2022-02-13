<?php

$servername = "localhost";
$username = "root";
$password = "2020";


$dbname = "mysocialmedia";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "connected! \n\n";
}



$sql = "SELECT usu_login, usu_nome, usu_email FROM tbusuario";
$result = $conn->query($sql);

//var_dump($result);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "login: " . $row["usu_login"] . " - Name: " . $row["usu_nome"] . "  email:" . $row["usu_email"] . "\n";
    }
} else {
    echo "0 results";
}
$conn->close();
