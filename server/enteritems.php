<?php
require_once('server.php');

//$ID = $_POST['userid'];
$FirstName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$Hasteckel = $_POST['hasteckel'];
$Email = $_POST['email'];

$query = 'INSERT INTO Users (FirstName, LastName, Hasteckel, Email) VALUES (?,?,?,?)';

$stmt = $connection->Prepare($query);
$stmt->bind_param('ssis', $FirstName, $LastName, $Hasteckel, $Email);
if ($stmt->execute()) {
    echo "success";
} else {
    echo "failed";
}
