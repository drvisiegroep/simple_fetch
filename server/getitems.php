<?php
require_once('server.php');
$response = [];

if ($connection) {
    $query = "SELECT * FROM Users";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header('Content-Type: JSON');
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['ID'] = $row['ID'];
            $response[$i]['FirstName'] = $row['FirstName'];
            $response[$i]['LastName'] = $row['LastName'];
            $response[$i]['Hasteckel'] = $row['Hasteckel'];
            $response[$i]['Email'] = $row['Email'];
            $i++;
        }
        echo json_encode($response);
    }
} else {
    echo 'NO DB CONN LOL';
}
mysqli_close($connection);
