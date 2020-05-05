<?php

class UserModel {

    public $name;
    public $emai;
    public $password;
    
    public function __construct(
        string $name,
        string $emai,
        string $password
    ) {
        $this->name = $name;
        $this->email = $emai;
        $this->password = $password;
    }
}


class UserController {

    public function createUser(array $request)
    {
        $user = new UserModel(
                    $request['name'],
                    $request['email'],
                    $request['password']
        );

        print_r($user);

    }
}


$data = [
    'name' => 'Alton Gomez',
    'email' => 'altongomez@example.com',
    'password' => '*********'
];

$user = new UserController();
$user->createUser($data);

//constructor helps us to set the properties of the class while creatingt the object. Once the object is initialized, the constructor is automatically called.