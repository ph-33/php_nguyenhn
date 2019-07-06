<?php 
    class Account_controller
    {
        public function index()
        {
            include("view/account/login.php");
        }
        public function login()
        {
            $username = $_POST['username'];
            $pass = $_POST['password'];
            if(empty($username) || empty($pass))
                {
                    echo "username and password invalid";
                }
                else
                {
                    $account = AccountDB::login($username,$pass);
                    if(isset($_SESSION['login']))
                        {
                            $data = $_SESSION['login'];
                        }
                    else
                        {
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
                            include('view/account/atm.php');
                         }
                        else
                        {
                            echo 'username and password incorrect';
                        }
                }
        }
        public function viewaccount()
        {
            include('view/account/viewaccount.php');
        }
        public function logout()
        {
            session_destroy();
            echo 'logout completed';
            include("view/account/login.php");
        }
    }
?>