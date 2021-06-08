<?php
//session_start();
$connect = require_once 'connect.php';
//session_start();

$userName = $_POST['name'];
$userSurname = $_POST['lastName'];
$userEmail = $_POST['email'];
$userPass = $_POST['password'];
$userConfPass = $_POST['confirmPass'];

if ($userPass === $userConfPass) {
    //con
    $userPass = md5($userPass);
    mysqli_query($connect, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES('$userName', '$userSurname', '$userEmail', '$userPass' )");
    header('Content-Type: application/json');
    echo json_encode(['message' => 'ok']);
//    $_SESSION['message'] = 'Success';
}else {
//    $_SESSION['message'] = 'Password do not match;';
//    header('Location:../pages/regForm.php');
    header('Content-Type: application/json');
    echo json_encode(['message' => 'ok']);
}



//if (empty($lastName) && empty($firstName) && empty($email) && empty(password)) {
//    $_SESSION['message'] = 'Fill all fields';
//    header('Location:../regForm.php');
//    exit();
//} elseif ($userPass !== $userConfPass) {
//    $_SESSION['message'] = 'Password do not match;';
//  header('Location:../regForm.php');
//  exit();
//} else {
//    header('Location:../index.php');
//   $userPass = md5($userPass);
//    mysqli_query($connect, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES('$userName', '$userSurname', '$userEmail', '$userPass' )");
//}
//
//
//
//
//
//
//
//
//
//
////$_SESSION['message'] = 'Success';
////header('Location: ../index.php');



