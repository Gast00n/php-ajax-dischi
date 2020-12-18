<?php

/**
 * 
 * Non più utile, tutta la logica è nel json principale. 
 * 
 */

// Including Database
// include __DIR__ . '/../partials/database.php';


// if (empty($_GET) ) {
//     header('Content-Type: application/json');
//     echo json_encode($database);

// } else {
//     $filter = $_GET['artista'];
    
//     if ($filter != 'all') {
//         $dbFiltered = [];
//         foreach ($database as $data) {
//             if (in_array($filter, $data)) {
//                 array_push($dbFiltered, $data);   
//             }    
//         }
//         header('Content-Type: application/json');
//         echo json_encode($dbFiltered);
//     } else {
//         header('Content-Type: application/json');
//         echo json_encode($database);
//     }
// }



?>
