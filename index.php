<?php
ob_start();
session_start();
require_once('./config.php');

//Initialize Access Control Lists
$ACL = Array(
    //First value is homepage for current role
    'guest' => array('home', 'login', 'register', 'join'),
    'user' => array('boarding', 'booking', 'cinema', 'movie', 'logout'),
    'mod' => array('boarding', 'logout'),
    'admin' => array('boarding', 'logout')
);

//Initialize person class
$Person = new Person($_SESSION['person']);
//Initialize router
$Page = new KillSwitch($Person->getRole(), $ACL, $_GET['page']);
//Render page
$Page->renderPage();


ob_end_flush();