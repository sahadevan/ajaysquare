<?php 
     require '../dbconfig.php';

     $database->insert("messages", [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "subject" => $_POST['subject'],
        "message" => $_POST['message']
    ]);

    header('Content-type: application/json');
    $response_array['status'] = 'success';
    echo json_encode($response_array);    
 ?>