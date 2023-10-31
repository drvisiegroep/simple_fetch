<?php

$dbhost = 'localhost';
$dbuser = 'deb141382_daan001';
$dbpass = 'V1sieTest';
$dbname = 'deb141382_daan001';

$connection = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($connection->connect_error) {
    die("CONNECTION EREEUR!");
}
