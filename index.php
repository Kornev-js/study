<?php
session_start();

$arr = array('registration', 'login') ;

$action = $_GET['action'] ?? $_POST['action'] ?? null;

//var_dump($action);
if (in_array($action, $arr)) {
    include("./functionality/$action.php");
    exit();
}

$arr = array('pages/logForm', 'pages/CV', 'pages/indexForm', 'pages/regForm', 'pages/edit_form') ;
$pages = (isset($_GET['tab'])) ? $_GET['tab']: 'pages/CV';

switch ($pages) {
	case 'pages/logForm':
        $mainCss = '<link rel="stylesheet" href="../css/logForm.css">';
        $mainTitle = 'LOGIN FORM';	
	    break;
	case 'pages/CV':
        $mainCss = '<link rel="stylesheet" href="../css/stylesCV.css">';	
        $mainTitle = 'RESUME';
	    break;
	case 'pages/indexForm':
        $mainCss = '<link rel="stylesheet" href="../css/stylesForm.css">';	
        $mainTitle = 'FORM';
	    break;
	case  'pages/regForm':
        $mainCss = '<link rel="stylesheet" href="../css/regForm.css">';	
        $mainTitle = 'REGISTRATION FORM';
	    break;
	case 'pages/edit_form':
        $mainCss = '<link rel="stylesheet" href="../css/edit_form.css">';	
        $mainTitle = 'EDIT FORM';
	    break;
    default:    
        $mainCss = '';	
        $mainTitle = 'INDEX';
        break;
}    
    
// pages TOP
include "pages/top.php";

include "pages/navigation.php";

if (in_array($pages, $arr)) {
    include("$pages.php");
}

if(array_key_exists('user', $_SESSION)){
    echo 'hello, ' . $_SESSION['user']['name'];
    echo ' To logout click' . '<a href = functionality/logout.php>Here</a>';
}

// pages BOTTOM
include "pages/bottom.php";
