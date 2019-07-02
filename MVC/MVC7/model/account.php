<?php 
    class Account
    {
        private $accountNo;
        private $ownerName;
        private $amount;
        private $accountType;
        private $password;

        
        public function __construct($accountNo, $ownerName,$amount,$accountType,$password) {
                $this->accountNo = $accountNo;
                $this->ownerName = $ownerName;
                $this->amount = $amount;
                $this->accountType = $accountType;
                $this->password = $password;
        }
        /**
         * Get the value of accountNo
         */ 
        public function getAccountNo()
        {
                return $this->accountNo;
        }

        /**
         * Set the value of accountNo
         *
         * @return  self
         */ 
        public function setAccountNo($accountNo)
        {
                $this->accountNo = $accountNo;

                return $this;
        }

        /**
         * Get the value of ownerName
         */ 
        public function getOwnerName()
        {
                return $this->ownerName;
        }

        /**
         * Set the value of ownerName
         *
         * @return  self
         */ 
        public function setOwnerName($ownerName)
        {
                $this->ownerName = $ownerName;

                return $this;
        }

        /**
         * Get the value of amount
         */ 
        public function getAmount()
        {
                return $this->amount;
        }

        /**
         * Set the value of amount
         *
         * @return  self
         */ 
        public function setAmount($amount)
        {
                $this->amount = $amount;

                return $this;
        }

        /**
         * Get the value of accountType
         */ 
        public function getAccountType()
        {
                return $this->accountType;
        }

        /**
         * Set the value of accountType
         *
         * @return  self
         */ 
        public function setAccountType($accountType)
        {
                $this->accountType = $accountType;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
    }
?>