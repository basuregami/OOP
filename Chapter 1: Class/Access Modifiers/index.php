<?php

class User {

    public $firstName;

    public $lastName;

    protected $email;

    private $password;

    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $password
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email; 
        $this->password = $password;
    }

    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function getEmail()
    {
        return $this->email;
    }

    private function getPassword()
    {
        return $this->password;
    }
}

$user = new User('John', 'Legend', 'johnlegend@example.com', '*********');

$userFullName = $user->getName();
$email = $user->getEmail(); // error protected method can only be accessed within class itself and subclasses of that class.
$password = $user->getPassword(); //error private method can only be accessed within the class itself.