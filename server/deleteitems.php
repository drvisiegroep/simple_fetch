<?php
require_once('server.php');
$ID_to_delete = $_POST['ID'];

$query = "DELETE FROM 'Users' WHERE ID = '" . $ID_to_delete . "' ";

$stmt = $connection->Prepare($query);
if($stmt->execute()) {
    echo "success";
} else {
    echo "failed";
}
