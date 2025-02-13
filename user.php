<?php
class userPhp
{
    // property declaration
    private $id = 'a default value';
    private $imie = 'a default value';
    private $nazwisko = 'a default value';
    private $email = 'a default value';
    private $password = 'a default value';



    // method declaration
    public function toArray()
    {
        return [
            'id' => $this->id,
            'imie' => $this->imie,
            'nazwisko' => $this->nazwisko,
            'email' => $this->email,
            'password' => $this->password

        ];
    }
}
