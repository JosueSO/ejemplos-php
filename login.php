<?php

// var_dump($_GET);

// var_dump($_POST);

$data = json_decode(file_get_contents('php://input'));

// var_dump($data);

echo "Sesión iniciada con el usuario " . $data->username;

?>