<?php 
    namespace Controller;
    class User
    {
        public function add()
        {
            if(empty($_SESSION['users']))
            {
            $user = new \Model\User("An","Nguyen","annguyen@gmail.com");
            $user1 = new \Model\User("Binh","Le","binhle@gmail.com");
            $user2 = new \Model\User("Trang","Tran","trangtran@gmail.com");
            $data[] = $user;
            $data[] = $user1;
            $data[] = $user2;
            $_SESSION['users'] = $data;
            }
            // else
            // {
            //     $data = $_SESSION['users'];
            //    // include('view/user/user_list.php');
            // }
            
            
        }
        public function index()
        {
            
            
            $data = isset($_SESSION['users']) ? $_SESSION['users'] : [];
            //var_dump($data);
            $query = filter_input(INPUT_GET, 'search');
            if ($query !== null && $query !== '') {
                $users = [];
                foreach ($data as $item) {
                     if (stripos($item->getFirstName(),$query) !== false || stripos($item->getLastName(),$query) !== false ||stripos($item->getEmail(),$query) !== false  ) {
                       $users[] = $item;
                      //echo  $item ->getFirstName();
                     // var_dump($item);
                     }
                   // echo  $item ->getFirstName();
                    
                }
            } else {
                $users = $data;
            }
            //var_dump($data);
            
        
           include 'view/user/user_list.php';
             
             //var_dump($data);

        }
        public function delete()
        {
        $userEmail = $_POST['user_id'];
		$data = isset($_SESSION['users']) ? $_SESSION['users'] : [];
		foreach ($data as $key=>$val) {
			if($val->getEmail() == $userEmail)
			{
				//var_dump($_SESSION['customer'][$key]);
				unset($_SESSION['users'][$key]);
                //break;
                
            }
            
        }
            if(!empty($_SESSION['users']))
            {
            header('Location: ?action = index');
            }else
            {
             echo "ban da xoa het du lieeu";
             echo '<a href="?action = index"> Nhấp để tạo mới dữ liệu</a>';
            }
        }
        public function edit(){
            $email = $_POST['email1'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName']; 
            $data = isset($_SESSION['users']) ? $_SESSION['users'] : [];
            foreach ($data as $val) {
                if($val->getEmail() == $email)
                {
                    $val->setFirstName($firstName);
                    $val->setLastName($lastName);
                }
                //echo $val->getName();
            }
            header('Location: ?action = index');
        }
    }

?>