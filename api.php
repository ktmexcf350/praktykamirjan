<?php    
//require_once 'dbconnection.php';
require_once 'user.php';
$response = [
    'imie' => isset($_POST['imie']) ? $_POST['imie'] : false,
    'nazwisko' => isset($_POST['nazwisko']) ? $_POST['nazwisko'] : false,
    'email' => isset($_POST['email']) ? $_POST['email'] : false,
    'password' => isset($_POST['password']) ? password_hash( $_POST['password'],PASSWORD_DEFAULT) : false,
];

echo (json_encode($response));
   



    // if (password_verify('password', $hash)) {
    //     echo 'Password is valid!';
    // } else {
    //     echo 'Invalid password.';
    // }
    

// $sql = "INSERT INTO id(imie, nazwisko, email, password, create_date, update_date) VALUES('".$response['imie']."', '".$response['nazwisko']."','".$response['email']."','".$response['password']."', '$create_date_str', '$update_date_str')";


// if ($mysqli->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $mysqli->error;
// }

// $mysqli->close();


$user = new userPhp ();
$user ->setImie($_POST['imie']);
$user ->setNazwisko(nazwisko: $_POST['nazwisko']);
$user ->setEmail(email: $_POST['email']);
$user ->setPassword(password: $_POST['password']);
$user ->save ();

?>

