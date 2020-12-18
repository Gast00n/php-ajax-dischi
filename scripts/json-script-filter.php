<?php

// Including Database
include __DIR__ . '/../partials/database.php';

$filter = $_GET['artista'];
$dbFiltered = [];
foreach ($database as $data) {
    if (in_array($filter, $data)) {
        array_push($dbFiltered, $data);   
    }    
}

header('Content-Type: application/json');
echo json_encode($dbFiltered);

?>
