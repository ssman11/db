<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "univercity";
$myconnection = new mysqli($host, $user, $pass, $dbname);
$query = "CREATE TABLE test (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
adress VARCHAR(300) NOT NULL)";
$result = $myconnection->query($query);
/*while ($row = $result->fetch_assoc()) {
    echo $row['id'] . "<br/>";
    echo $row['name'] . "<br/>";
    echo $row['l name'] . "<br/>";
    echo $row['phone number'] . "<br/>";
    echo $row['adress'] . "<br/>";
}*/




