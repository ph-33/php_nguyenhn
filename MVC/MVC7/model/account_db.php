<?php 
    class AccountDB{
        public static function login($username,$pass) {
            $db = Database::getDB();
            $query = 'SELECT * FROM account
                    WHERE accountNo = :username AND Pass = :pass ';
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':pass', $pass);
            $statement->execute();
            $accounts = array();
            foreach ($statement as $row) {
                $account = new Account($row['accountNo'],
                                        $row['ownerName'],
                                        $row['amount'],
                                        $row['accountType'],
                                        $row['Pass']
                                    );
                $accounts[] = $account;
            }
            return $accounts;
        }
    }
?>