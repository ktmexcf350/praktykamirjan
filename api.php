<?php    
include 'dbconnection.php';
$response = [
    'imie' => isset($_POST['imie']) ? $_POST['imie'] : false,
    'nazwisko' => isset($_POST['nazwisko']) ? $_POST['nazwisko'] : false,
    'email' => isset($_POST['email']) ? $_POST['email'] : false,
    'password' => isset($_POST['password']) ? password_hash( $_POST['password'],PASSWORD_DEFAULT) : false,
];

echo (json_encode($response));
    $create_date = new DateTime();
    $update_date = new DateTime();
    
    $create_date = $create_date->format('Y-m-d H-i-s');
    $update_date = $update_date->format('Y-m-d H-i-s');
  

   

    // if (password_verify('password', $hash)) {
    //     echo 'Password is valid!';
    // } else {
    //     echo 'Invalid password.';
    // }
    



$sql = "INSERT INTO id(imie, nazwisko, email, password) VALUES('".$response['imie']."', '".$response['nazwisko']."','".$response['email']."','".$response['password']."')";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>

