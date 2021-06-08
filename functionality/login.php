<?php
$connect = mysqli_connect('localhost', 'admin', 'root', 'my_db');

if (!$connect) {
    die('error connect to db');
}
require_once 'connect.php';

$data = json_decode(file_get_contents('php://input'), true);
//var_dump($data);

$userEmail = $data['email'];
$userPass = md5($data['password']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$userEmail' AND `password` = '$userPass'");
//var_dump($check_user, mysqli_num_rows($check_user) );
//die();

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['lastName'],
        "full_name" => $user['email']
    ];

    $data = [
        'success' => true,
        'user' => [

            "id" => $user['id'],
            "name" => $user['lastName'],
            "full_name" => $user['email']
        ]
    ];

} else {
    $data = [
        'success' => false,
    ];
}

header('Content-Type: application/json');
echo json_encode($data);




















//
//$userEmail = $check_user->fetch_assoc();
//
//if (count($userEmail) == 0) {
//    header('Location:../regForm.php');
//    exit();
//
//}
//session_start();
//$_SESSION["email"] = $userEmail;
//$_SESSION["password"] = $userPass;
//echo "Данные сохранены в сессии";
