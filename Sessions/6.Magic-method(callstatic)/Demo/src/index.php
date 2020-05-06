<?php

require __DIR__.'/../vendor/autoload.php';

use App\Controller\UserController;


$data = [
	'first_name'  => 'John',
	'last_name' => 'Legend',
	'email' => 'johnlegend@example.com',
	'password' => '********'
];

$userObj = new UserController();
echo $userObj->createUser($data);


$data2 = [
	'first_name'  => 'Jaxx',
	'last_name' => 'Mann',
	'email' => 'jaxxmann@example.com',
	'password' => '********'
];

$userObj2 = new UserController();
print_r($userObj2->registerUser());
// echo $userObj2->registerUser($data);