<?php


    require 'model/User.php';
    require 'controller/User.php';
    session_start();
    $action = 'index';
    $userController = new \Controller\User();
    if (isset($_REQUEST['action']) && $_REQUEST['action'] !== '') {
        $action = $_REQUEST['action'];
    }
    if ($action === 'index') {
        $userController->add();
        $userController->index();
    }
    else if ($action === 'delete')
    {
        $userController->delete();
    }
    else if ($action === 'viewedit')
    {
        $userController->viewedit();
    }
    else if ($action === 'edit')
    {
        $userController->edit();
    }
    

    

?>