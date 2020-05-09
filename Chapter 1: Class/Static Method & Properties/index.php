<?php
// import user model class use App/Model/User;

class UserService {
    
    public static $staticProperty = 'some value';
    public $firstName;
    public $lastName;
    public $emai;

   public static function registerUser(
     string $firtName,
     string $lastName,
     string $email
   )
   {
       $data['first_name'] = $firName;
       $data['last_name'] = $lastName;
       $data['email'] = $email;
       $user = User::create($data); // User model 
       if(!$user) {
         throw new Exception('user registration service is down');
       }
       return $user;

   }
}

//Usercontroller create method body 
$user = UserService::registerUser('John', 'Legend', 'johnlegend@example.com');

$staticProperty = UserSerive::$staticProperty;


// ** note
// 1) To access the static method and properties of class we don't have to creat the object of class
