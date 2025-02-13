<?php    

$response = [
    'imie' => isset($_POST['imie']) ? $_POST['imie'] : false,
    'nazwisko' => isset($_POST['nazwisko']) ? $_POST['nazwisko'] : false,
    'email' => isset($_POST['email']) ? $_POST['email'] : false,
    'password' => isset($_POST['password']) ? $_POST['password'] : false,
];

echo die(json_encode($response));

?>