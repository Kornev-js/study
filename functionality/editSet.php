<?php require_once 'connect.php';
//if(isset($_POST['phone']) && isset($_POST['email']) &&
//    isset($_POST['city']) && isset($_POST['link']) && isset($_POST['skillsArea']) && isset($_POST['profileArea']) && isset($_POST['profExpArea'])) {}

$setPhone = $_POST['phone'];
$setEmail = $_POST['email'];
$setCity = $_POST['city'];
$setLink = $_POST['link'];
$setSkills = $_POST['skillsArea'];
$setProfile = $_POST['profileArea'];
$setProfExp = $_POST['profExpArea'];


mysqli_query($connect, "INSERT INTO `resume_data` (`id`, `type`, `phone`, `email`, `city`, `link`, `skillsArea`, `profileArea`, `profExpArea`) VALUES(NULL, 'editable', '$setPhone', '$setEmail', '$setCity', '$setLink', '$setSkills', '$setProfile', '$setProfExp' )");

header('Location:../index.php');