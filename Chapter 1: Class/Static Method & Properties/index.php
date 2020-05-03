<?php
// import user model class use App/Model/User;

class UserService {

    public $firstName;
    public $lastName;

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



//