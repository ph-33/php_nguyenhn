<?php 
require 'controller/account_controller.php';
require_once('model/database.php');
require_once('model/account.php');
require_once('model/account_db.php');
session_start();
$action = 'index';
$accountController = new Account_controller();
if (isset($_REQUEST['action']) && $_REQUEST['action'] !== '') {
    $action = $_REQUEST['action'];
}

if ($action === 'index') {
    $accountController->index();
} else if ($action === 'login') {
    $accountController->login();
} 
elseif ($action === 'viewaccount') {
    $accountController->viewaccount();
}elseif ($action === 'logout') {
    $accountController->logout();
}
 else 
{
    $accountController->index();
}
?>