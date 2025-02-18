<?php


class User extends Model {
        private $id;
        private $imie;
        private $nazwisko;
        private $email;
        private $password;

        public $table = "users";

        public function __construct($id, $imie, $nazwisko, $email, $password) {
            $this->id = $id;
            $this->imie = $imie;
            $this->nazwisko = $nazwisko;
            $this->email = $email;
            $this->password = $password;
        

        }
  

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of imie
         */ 
        public function getImie()
        {
                return $this->imie;
        }

        /**
         * Set the value of imie
         *
         * @return  self
         */ 
        public function setImie($imie)
        {
                $this->imie = $imie;

                return $this;
        }

        /**
         * Get the value of nazwisko
         */ 
        public function getNazwisko()
        {
                return $this->nazwisko;
        }

        /**
         * Set the value of nazwisko
         *
         * @return  self
         */ 
        public function setNazwisko($nazwisko)
        {
                $this->nazwisko = $nazwisko;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

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
        