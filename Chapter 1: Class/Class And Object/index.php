<?php

class User {

    public $firstName;

    public $lastName;

    protected $email;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

  
    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function getEmail()
    {
        return $this->email;
    }

  
}

$user = new User(); // Object
$user->setFirstName('John');
$user->setLastName('Legend');
$user->setEmail('johnlegend@example.com');
$userFullName = $user->getName();
echo $userFullName;
$email = $user->getEmail(); // error protected method can only be accessed within class itself and subclasses of that class.