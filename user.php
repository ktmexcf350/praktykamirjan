<?php
class userPhp
{
    // property declaration
    private $id = 'a default value';
    private $imie = 'a default value';
    private $nazwisko = 'a default value';
    private $email = 'a default value';
    private $password = 'a default value';
    private $create_date = 'a default value';
    private $update_date = 'a default value';



    public function __construct(){
        $this ->create_date = new DateTime();
        $this ->update_date = new DateTime();
    }

    // method declaration
    public function toArray()
    {
        return [
            'id' => $this->id,
            'imie' => $this->imie,
            'nazwisko' => $this->nazwisko,
            'email' => $this->email,
            'password' => $this->password,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,

        ];
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
        $this->password = password_hash( $password,PASSWORD_DEFAULT);

        return $this;
    }

     /**
     * Get the value of create_date
     */ 
    public function getCreate_date()
    {
        return $this->create_date;
    }
/**
     * Get the value of update_date
     */ 
    public function getUpdate_date()
    {
        return $this->update_date;
    }






    public function save()
    {require 'dbconnection.php';

        $local_create_date = $this->create_date->format('Y-m-d H:i:s');
        $local_update_date = $this->update_date->format('Y-m-d H:i:s');

        // create_date, update_date, 'create_date', 'update_date'
    $sql = "INSERT INTO id(imie, nazwisko, email, password, create_date, update_date) VALUES('$this->imie', '$this->nazwisko', '$this->email', '$this->password','$local_create_date', '$local_update_date')";
         
    

        if($mysqli->query($sql) === TRUE) {
            return "New record created successfully";
        } 
        else {
            return "Error:";
        }
        

    }

  
}
