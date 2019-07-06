<?php
    require_once ('controller/user_controller.php');
    require_once('model/database.php');
    require_once('model/user.php');
    require_once('model/user_db.php');
    session_start();

    $action = 'index';
    $userController = new UserController();
    if (isset($_REQUEST['action']) && $_REQUEST['action'] !== '') {
        $action = $_REQUEST['action'];
    }
    if ($action === 'index') {
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
     else if ($action === 'search')
    {
        $userController->search();
    }
    else if ($action === 'viewadd')
    {
        $userController->viewadd();
    }
    else if ($action === 'add')
    {
        $userController->add();
    }
?>