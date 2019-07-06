<?php 
class UserController
{
    public function index()
    {
        $users = UserDB::getUsers();
        include('view/user/user_list.php');
    }

    public function delete()
    {
        $email = filter_input(INPUT_POST, 'email');
        UserDB::deleteUser($email);
        header("Location:?action=index");
    }

    public function viewedit()
    {
        include('view/user/edit_user.php');
    }

    public function edit()
    {
        $email = $_POST['email1'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName']; 
        UserDB::editUser($email,$firstName,$lastName);
        $users = UserDB::getUsers();
        include('view/user/user_list.php');
    }

    public function viewadd()
    {
        include('view/user/add.php');
    }

    public function add()
    {
        $email = $_POST['email'];
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname']; 
        if ($email == NULL || $email == FALSE || 
            $firstName == NULL || $firstName == FALSE || $lastName == FALSE || $lastName == NULL) 
        {
            echo "Invalid product data. Check all fields and try again.";
            echo '<a href="view/user/add.php">Quay lai</a>';
       
        }
        else
        {
            UserDB::addUser($email,$firstName,$lastName);
            $users = UserDB::getUsers();
            include('view/user/user_list.php');
        }
    }
    public function search()
    {
        $search = $_GET['search'];
        $users = UserDB::searchUser($search);
        include('view/user/user_list.php');
    }
}
?>
