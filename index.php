<?php
ob_start();
session_start();
require_once('./config.php');

//Initialize Access Control Lists
$ACL = Array(
    //First value is homepage for current role
    'guest' => array('home', 'login', 'register'),
    'user' => array('boarding', 'logout'),
    'mod' => array('boarding', 'logout'),
    'admin' => array('boarding', 'logout')
);
//test branch


//Initialize person class
$Person = new Person($_SESSION['person']);
//Initialize router
$Page = new KillSwitch($Person->getRole(), $ACL, $_GET['page']);
//Render page
$Page->renderPage();



ob_end_flush();