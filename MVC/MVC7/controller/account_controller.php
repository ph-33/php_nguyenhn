<?php 
    require_once('../model/database.php');
    require_once('../model/account.php');
    require_once('../model/account_db.php');
    session_start();
     $action = filter_input(INPUT_POST, 'action');
     if ($action == NULL) {
         $action = filter_input(INPUT_GET, 'action');
         if ($action == NULL) {
             $action = 'index';
         }
     }  
     if($action == 'index')
        {
            include("../view/account/login.php"); 
            
        }
        else if($action === 'login')
        {
            $username = $_POST['username'];
            $pass = $_POST['password'];
           // echo $username,$pass;
            
             //var_dump($account);
            if(empty($username) || empty($pass))
             {
                 echo "username and password invalid";
             }else{
                $account = AccountDB::login($username,$pass);
                if(isset($_SESSION['login']))
                {
                    $data = $_SESSION['login'];
                }else{
                    $data = [];
                }
                $data = $account;
                $_SESSION['login'] = $data;               
                foreach ($data as $value ) {
                    $_SESSION['account'] =  $value->getAccountNo();
                    $_SESSION['owner_no'] = $value->getOwnerName();
                    $_SESSION['amount'] = $value->getAmount();
                    $_SESSION['account_type'] = $value->getAccountType();
                }
                if(!empty($data))
                {
                header('Location: ../view/account/atm.php');
                }else{
                    echo 'username and password incorrect';
                }

             }
        }else if($action === 'logout')
        {
            session_destroy();
            include("../view/account/login.php");
        }
?>